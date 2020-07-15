<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataChrome;
use App\DataChromep;
use App\DataChromew;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $table=$request->header('Table');
        if($table=="datachromep"){
            $data = DataChromep::limit(20)->get();
        }elseif($table=="datachromew"){
            $data = DataChromew::limit(20)->get();
        }else{
            $data = DataChrome::limit(20)->get();
        }
        return $data;
    }
    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
        $email=$request->request->get('email');
        $table=$request->request->get('table');
        $orderBy=$request->request->get('orderBy');
        $order=$request->request->get('order');
        $result=[];
        if($order=="asc"){
            $order="asc";
        }else{
            $order="desc";
        }
        if($table=="datachromep"){
            if($orderBy==2){
                $orderBy="Seen";
            }elseif($orderBy==3){
                $orderBy="Clicked";
            }elseif($orderBy==4){
                $orderBy="Selected";
            }else{
                $orderBy="Primed";
            }
            $result= DataChromep::where("Word",'LIKE','%'.$email.'%')
                                ->orderBy("".$orderBy."", $order)->get();
        }else if($table=="datachromew"){
            if($orderBy==2){
                $orderBy="Seen";
            }elseif($orderBy==3){
                $orderBy="Clicked";
            }elseif($orderBy==4){
                $orderBy="Selected";
            }else{
                $orderBy="Primed";
            }
            $result= DataChromew::where("Word",'LIKE','%'.$email.'%')
                                ->orderBy("".$orderBy."", $order)->get();
        }else{
            if($orderBy==2){
                $orderBy="WordsSeen";
            }elseif($orderBy==3){
                $orderBy="AffectPrimed";
            }elseif($orderBy==4){
                $orderBy="AffectSeen";
            }elseif($orderBy==5){
                $orderBy="PageActiveTime";
            }else{
                $orderBy="WordsPrimed";
            }
            $result= DataChrome::where("Email",'LIKE','%'.$email.'%')
                                ->orderBy("".$orderBy."", $order)->get();
        }
        
        return ['data' => $result];
    }
}
