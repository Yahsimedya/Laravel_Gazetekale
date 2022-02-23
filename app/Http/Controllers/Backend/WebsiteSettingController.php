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

//        $websetting->update($request->all());
        $old_image = $request->old_image;
        $old_defaultImage = $request->old_defaultImage;
        $old_logowhite = $request->old_logowhite;

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

        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalName();
            Image::make($image)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_one);
            $data['logo'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_one;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['logo'] = $old_image;
            $websetting->update($request->all());
        }
        if ($defaultImage) {
            $image_two = uniqid() . '.' . $defaultImage->getClientOriginalName();
            Image::make($defaultImage)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_two);
            $data['defaultImage'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_two;
            WebsiteSetting::find($websetting->id)->update($data);

        } else {
            $data['defaultImage'] = $old_defaultImage;
            $websetting->update($request->all());
        }
        if ($logowhite) {
            $image_three = uniqid() . '.' . $logowhite->getClientOriginalName();
            Image::make($logowhite)->save('image/logo/' . $yil . '/' . $ay . '/' . $image_three);
            $data['logowhite'] = 'image/logo/' . $yil . '/' . $ay . '/' . $image_three;
            WebsiteSetting::find($websetting->id)->update($data);
        } else {
            $data['logowhite'] = $old_logowhite;
            $websetting->update($request->all());
        }

        $websetting->update($request->all());

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
