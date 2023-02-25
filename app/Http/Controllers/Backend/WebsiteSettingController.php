<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $websetting = WebsiteSetting::first();
        return view('backend.setting.webisitesetting', compact('websetting'));
    }


    public function update(Request $request, WebsiteSetting $websetting)
    {
        $data = $request->all();
        // dd($request->video_logo);
        //        $websetting->update($request->all());
        $old_image = $request->old_image;
        $old_defaultImage = $request->old_defaultImage;
        $old_logowhite = $request->old_logowhite;
        $old_videoLogo = $request->old_videoLogo;
        $old_siteFavicon = $request->old_siteFavicon;



        $yil = Carbon::now()->year;
        $ay = Carbon::now()->month;
        if (file_exists('image/logo/' . $yil) == false) {
            mkdir('image/logo/' . $yil, 0777, true);
        }
        if (file_exists('image/logo/' . $yil . '/' . $ay) == false) {
            mkdir('image/logo/' . $yil . '/' . $ay, 0777, true);
        }
        $image = $request->logo;
        $defaultImage = $request->defaultImage;
        $logowhite = $request->logowhite;
        $videoLogo = $request->video_logo;
        $siteFavicon = $request->site_favicon;
        // dd($siteFavicon);

        if (isset($image)) {
            $image_one = uniqid() . '.' . $image->getClientOriginalName();
            Image::make($image)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_one);
            $data['logo'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_one;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['logo'] = $old_image;
            // $websetting->update($request->all());
        }
        if (isset($defaultImage)) {
            $image_two = uniqid() . '.' . $defaultImage->getClientOriginalName();
            Image::make($defaultImage)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_two);
            $data['defaultImage'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_two;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['defaultImage'] = $old_defaultImage;
            // $websetting->update($request->all());
        }
        if (isset($logowhite)) {
            $image_three = uniqid() . '.' . $logowhite->getClientOriginalName();
            Image::make($logowhite)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_three);
            $data['logowhite'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_three;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['logowhite'] = $old_logowhite;
            // $websetting->update($request->all());
        }
        if (isset($videoLogo)) {
            $image_four = uniqid() . '.' . $videoLogo->getClientOriginalName();
            Image::make($videoLogo)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_four);
            $data['video_logo'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_four;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['video_logo'] = $old_videoLogo;
            // $websetting->update($request->all());
        }
        if (isset($siteFavicon)) {
            $image_five = $siteFavicon->getClientOriginalName();
            Image::make($siteFavicon)->save('icon/' . $image_five);
            $data['site_favicon'] = 'icon/' . $image_five;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['site_favicon'] = $old_siteFavicon;
            // $websetting->update($request->all());
        }
        // dd($data);
        $websetting->update($data);

        return Redirect()->route('website.setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
