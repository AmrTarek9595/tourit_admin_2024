<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\index_page;
use App\Models\destination;
use App\Models\destination_image;

class home_controller extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except([]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 

        public function return_home_input_data(){
            return view('return_home_inputs');
        }



        public function addindexdata(Request $request){
            $index_home=new index_page;
           
            $request->validate([
                'cover' => 'image|max:2048'
            ]);

            if($request->cover)
            {

            $imageName=time().'.'.$request->cover->extension();
            $request->cover->move(public_path('../../website_9010c5e8/public/homepage'), $imageName);
            

            index_page::create([
                'cover'=>$imageName,
                'cover_text_1'=>$request->cover_text_1,
                'cover_text_2'=>$request->cover_text_2,
                'no_success_tours'=>$request->no_success_tours,
                'no_happy_tourist'=>$request->no_happy_tourist,
                'no_place_explored'=>$request->no_place_explored,]);
            return back()->with('success', 'Update Successfully');
            }
            else{
               index_page::create(['cover_text_1'=>$request->cover_text_1,
                'cover_text_2'=>$request->cover_text_2,
                'no_success_tours'=>$request->no_success_tours,
                'no_happy_tourist'=>$request->no_happy_tourist,
                'no_place_explored'=>$request->no_place_explored,]);
            return back()->with('success', 'Update Successfully');
            }
           
        }

         public function uploadfeedback(Request $request){
           index_page::create(['tourist_feedback'=>$request->tourist_feedback,
                               'tourist_name'=>$request->tourist_name,
                               'tourist_title'=>$request->tourist_title])  ;
                               return back()->with('success', 'Update Successfully');
        }

         public function return_destination_view(){
            $destination=destination::get();
            return view('return_destination_view',compact('destination'));
        }
         public function addprogram(Request $request){
            $request->validate([
                'cover' => 'required|image|max:5120',
               'Country'=>'required',
                'city'=>'required',
                'name_of_hotel'=>'required',
                'description'=>'required',
                'includes'=>'required',
                'not_includes'=>'required',
                'children_policy'=>'required',
                'guest_national'=>'required',
                'date_start'=>'required',
                'date_end'=>'required',
                'price_single_double'=>'required',
                'no_days'=>'required',
                'program'=>'required',
                'show_trip'=>'required',
                'price_cover'=>'required',
            ]);
          
            $imagename=time().'.'.$request->cover->extension();
            $request->cover->move(public_path('../../website_9010c5e8/public/covertrips'), $imagename);
            
            destination::create([
                'cover' => $imagename,
                'Country'=>$request->Country,
                'city'=>$request->city,
                'name_of_hotel'=>$request->name_of_hotel,
                'description'=>$request->description,
                'includes'=>$request->includes,
                'not_includes'=>$request->not_includes,
                'children_policy'=>$request->children_policy,
                'guest_national'=>$request->guest_national,
                'date_start'=>$request->date_start,
                'date_end'=>$request->date_end,
                'price_single_double'=>$request->price_single_double,
                'no_days'=>$request->no_days,
                'program'=>$request->program,
                'show_trip'=>$request->show_trip,
                'price_cover'=>$request->price_cover,
            ]);
            return back()->with('success', 'Uploaded Successfully');
        }

        public function editshowtrip(Request $request){
           destination::where(['id'=>$request->show_trip_id])->update(['show_trip'=>$request->show_trip]);
           return back()->with('success', 'Uploaded Successfully');
        }
        public function deletetrip(Request $request){
           destination::where(['id'=>$request->trip_id])->delete();
           return back()->with('success', 'Uploaded Successfully');
        }  
        public function return_add_destination_view(Request $request){
           $data = destination::get();
           return view('return_all_destinations_to_add_images_view',compact('data'));
        }
        public function uploadimagespertrip(Request $request){
           $trip_id= $request->trip_id;

        return view('uploadimagespertrip',compact('trip_id'));
        }
        public function uploadimagefortrip(Request $request){
            $imagename;
            for ($i=0; $i<count($request->file('image_name')); $i++) { 
                $imagename[$i]=rand(111111,999999).'.'.$request->image_name[$i]->extension();
                
               $request->image_name[$i]->move(public_path(/*'../../website_9010c5e8/public/covertrips'*/'/imagesoftrips'), $imagename[$i]);
                destination_image::create(
                    [
                        'dest_fk'=>$request->trip_id,
                        'image_name'=> $imagename[$i]
            ]);
            }
            
            $trip_id=$request->trip_id;
            return redirect('return_add_destination_view')->with('success','uploaded successfully');
            
        }
}
