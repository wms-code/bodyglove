<?php
namespace App\Http\Controllers\Admin\Settings; 
use Illuminate\Http\Request;
use App\Model\Style; 
use App\Model\Styledetail;
use App\Model\Size; 
use App\Model\Fabric;
use App\Model\Colour;
use DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class StyleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $style= Style::orderBy('name','asc')->paginate(5);
        return view('style.list',compact('style'));
    }

  

    public function create()
    {
        $size = Size::getall(); 
        $fabric=Fabric::getall();
        $colour=Colour::getall();
        return view('style.create',compact(['size','fabric','colour']));
    }
    public function store(Request $request)
    {
         $cover = $request->file('bookcover');
         $extension = $cover->getClientOriginalExtension();
         Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
     
         $user =Style::create([
            'name'=>$request->name,
            'size_code'=>$request->size_code,
            'cuttingprice'=>$request->cuttingprice,
            'singerprice'=>$request->singerprice,
            'pprice'=>$request->pprice,
            'kajaprice'=>$request->kajaprice,
            'checkingprice'=>$request->checkingprice,
            'ironprice'=>$request->ironprice,   
            'packingprice'=>$request->packingprice,
            'fabric_code1'=>$request->fabric_code1,
            'fabric_code2'=>$request->fabric_code2,
            'fabric_code3'=>$request->fabric_code3,
            'fabric_code4'=>$request->fabric_code4,
            'fabric_code5'=>$request->fabric_code5,
            'colour_code1'=>$request->colour_code1,
            'colour_code2'=>$request->colour_code2,
            'colour_code3'=>$request->colour_code3,
            'colour_code4'=>$request->colour_code4,
            'mime' => $cover->getClientMimeType(),
            'original_filename' => $cover->getClientOriginalName(),
            'filename' => $cover->getFilename().'.'.$extension,
            'colour_code5'=>$request->colour_code5
                        ]); 

          $styleid= $user->id;     
         Styledetail::create([
                    'styleid'=>$styleid,  
                    'size_code'=>$request->size_code,
                    'size1'=>$request->size1,
                    'size2'=>$request->size2,
                    'size3'=>$request->size3,
                    'size4'=>$request->size4,
                    'size5'=>$request->size5,
                    'size6'=>$request->size6,
                    'size7'=>$request->size7,
                    'size8'=>$request->size8,
                     'indx'=>1
                     ]);
        Styledetail::create([
                        'styleid'=>$styleid,  
                        'size_code'=>$request->size_code,
                        'size1'=>$request->weight_0,
                        'size2'=>$request->weight_1,
                        'size3'=>$request->weight_2,
                        'size4'=>$request->weight_3,
                        'size5'=>$request->weight_4,
                        'size6'=>$request->weight_5,
                        'size7'=>$request->weight_6,
                        'size8'=>$request->weight_7,
                         'indx'=>2
                         ]);
           
        $msg = [ 'message' => 'Style created successfully!' ];
        return  redirect('admin/style')->with($msg);
    }

  
    public function edit($id)
    {
         
        $rsdetails = DB::table('styledetail')        
         ->select('*')
         ->where('indx',1)         
         ->where('styleid',$id)
         ->get(); 

         $rsdetails1 = DB::table('styledetail')        
         ->select('*')
         ->where('indx',2)         
         ->where('styleid',$id)
         ->get(); 
        
         $rsstyle = DB::table('style')        
         ->select('*')
         ->where('id',$id)
         ->get();

        $size = Size::getall(); 
        $fabric=Fabric::getall();
        $colour=Colour::getall();
        return view('style.edit',compact(['rsstyle','size','fabric','colour','rsdetails','rsdetails1']));
        //return  view('style.edit',compact('style'));
    }

   
    public function update(Request $request)
    {
        $cover = $request->file('bookcover');
      //   $extension = $cover->getClientOriginalExtension();
       // Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        Style::where('id', $request->id) ->update(['name'=>$request->name,
        'size_code'=>$request->size_code,
        'cuttingprice'=>$request->cuttingprice,
        'singerprice'=>$request->singerprice,
        'pprice'=>$request->pprice,
        'kajaprice'=>$request->kajaprice,
        'checkingprice'=>$request->checkingprice,
        'ironprice'=>$request->ironprice, 
        'packingprice'=>$request->packingprice,  
        'fabric_code1'=>$request->fabric_code1,
        'fabric_code2'=>$request->fabric_code2,
        'fabric_code3'=>$request->fabric_code3,
        'fabric_code4'=>$request->fabric_code4,
        'fabric_code5'=>$request->fabric_code5,
        'colour_code1'=>$request->colour_code1,
        'colour_code2'=>$request->colour_code2,
        'colour_code3'=>$request->colour_code3,
        'colour_code4'=>$request->colour_code4,
        'colour_code5'=>$request->colour_code5        
        ]);   
        
        
        $styleid= $request->id;     
        Styledetail::where(['styleid'=> $styleid,'indx'=>1]) ->update([
                   'size_code'=>$request->size_code,
                   'size1'=>$request->size1,
                   'size2'=>$request->size2,
                   'size3'=>$request->size3,
                   'size4'=>$request->size4,
                   'size5'=>$request->size5,
                   'size6'=>$request->size6,
                   'size7'=>$request->size7,
                   'size8'=>$request->size8 
                    ]);

        Styledetail::where(['styleid'=> $styleid,'indx'=>2]) ->update([
                       'size_code'=>$request->size_code,
                       'size1'=>$request->weight_0,
                       'size2'=>$request->weight_1,
                       'size3'=>$request->weight_2,
                       'size4'=>$request->weight_3,
                       'size5'=>$request->weight_4,
                       'size6'=>$request->weight_5,
                       'size7'=>$request->weight_6,
                       'size8'=>$request->weight_7 
                        ]);

        $msg =['message' => 'Style Updated successfully!'];
        return  redirect('admin/style')->with($msg);
    }

   
    public function destroy(Style $style)
    {
       // $fabric->delete();
       // $msg =['message' => 'Fabric Deleted successfully!',
       //'type' => 'warning'];

       $msg =['message' => 'Unable to Delete!',
       'type' => 'warning'];
        return  redirect('admin/style')->with($msg);
    }
}
