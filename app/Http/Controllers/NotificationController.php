<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        return view('backend.notification.index');
    }


    public function send(Request $request)
    {
        $url = "https://fcm.googleapis.com/fcm/send";
        $token = "/topics/all";
        $serverKey = 'AAAAQr8k5vM:APA91bHwYhR54ePQiatPetQi5YK1bNMPnn9O5uG_Ihwbhkb3XzrbuO-fQ1rkLmxdxi1vABhFfkt4h9tcVAkm9BM8-FAwpEyCJLK0v11yekJwAbbQjvV1MGUsN373l0PLnmJQbpfdK75h';
        $title = $request->title;
        $body = $request->body;
        $id= (int)$request->id;
        $image= $request->image;

        $bildirim_Turu=$request->bildirim_turu_;


        $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default','image'=>$image);
        if (isset($id))
        {

            if($bildirim_Turu == 'haber_id')
            {
                $data = array('click_action' =>'FLUTTER_NOTIFICATION_CLICK', 'bildirimTur' => 'HaberBildirim', 'haberId' => $id,'image'=>$image);
            }
            else if ($bildirim_Turu == 'son_dakika_id')
            {
                $data = array('click_action' =>'FLUTTER_NOTIFICATION_CLICK', 'bildirimTur' => 'SonDakika', 'haberId' => $id,'image'=>$image);
            }
        }
        else
        {
            $data = array('click_action' =>'FLUTTER_NOTIFICATION_CLICK', 'bildirimTur' => 'Alert', 'baslik' => $title, 'aciklama' => $body,'image'=>$image);


        }

        $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high','data'=>$data, 'time_to_live'=> 3600);
        $json = json_encode($arrayToSend);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

        //Send the request
        $response = curl_exec($ch);
        //Close request
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // http durum kodu döndürür bu durumda başarılımı başarısız mı olduğunu anlarız




        curl_close($ch);


        return view('backend.notification.index');


    }
}
