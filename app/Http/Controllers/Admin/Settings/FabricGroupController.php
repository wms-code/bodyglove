<?php
namespace App\Http\Controllers\Admin\Settings; 
use Illuminate\Http\Request;
use App\Model\Fabricgroup; 
use Illuminate\Routing\Controller;
class FabricGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $rsfabricgroup= Fabricgroup::orderBy('name','asc')->paginate(5);
        return view('fabricgroup.list',compact('rsfabricgroup'));
    }

    public function create()
    {
        return view('fabricgroup.create');
    }


    public function store(Request $request)
    {
        Fabricgroup::create($request->all());
        $msg = [ 'message' => 'Fabric Group created successfully!' ];
        return  redirect('admin/fabricgroup')->with($msg);
    }

  
    public function edit($id)
    {
      //  return $id;
          
        $rsfabricgroup = Fabricgroup::find($id);     
        
        return  view('fabricgroup.edit',compact('rsfabricgroup'));
    }

   
    public function update(Request $request)
    {
        Fabricgroup::where('id', $request->id) ->update(['name'=>$request->name ]);       
        $msg =['message' => 'Fabric Group Updated successfully!'];
        return  redirect('admin/fabricgroup')->with($msg);
    }

   
    public function destroy(FabricGroup $rsfabricgroup)
    {
       // $fabric->delete();
       // $msg =['message' => 'Fabric Deleted successfully!',
       //'type' => 'warning'];

       $msg =['message' => 'Unable to Delete!',
       'type' => 'warning'];
        return  redirect('admin/fabricgroup')->with($msg);
    }
}
