@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">                
                <?php $sections=\DB::table('sections')->get();?>
                <div class="card-header">All Pictures
                    <a data-toggle="modal" data-target="#managesection" style="float:right; margin-left:20px; cursor: pointer; padding-top:6px;">
                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 45.973 45.973" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M43.454,18.443h-2.437c-0.453-1.766-1.16-3.42-2.082-4.933l1.752-1.756c0.473-0.473,0.733-1.104,0.733-1.774 c0-0.669-0.262-1.301-0.733-1.773l-2.92-2.917c-0.947-0.948-2.602-0.947-3.545-0.001l-1.826,1.815 C30.9,6.232,29.296,5.56,27.529,5.128V2.52c0-1.383-1.105-2.52-2.488-2.52h-4.128c-1.383,0-2.471,1.137-2.471,2.52v2.607 c-1.766,0.431-3.38,1.104-4.878,1.977l-1.825-1.815c-0.946-0.948-2.602-0.947-3.551-0.001L5.27,8.205 C4.802,8.672,4.535,9.318,4.535,9.978c0,0.669,0.259,1.299,0.733,1.772l1.752,1.76c-0.921,1.513-1.629,3.167-2.081,4.933H2.501 C1.117,18.443,0,19.555,0,20.935v4.125c0,1.384,1.117,2.471,2.501,2.471h2.438c0.452,1.766,1.159,3.43,2.079,4.943l-1.752,1.763 c-0.474,0.473-0.734,1.106-0.734,1.776s0.261,1.303,0.734,1.776l2.92,2.919c0.474,0.473,1.103,0.733,1.772,0.733 s1.299-0.261,1.773-0.733l1.833-1.816c1.498,0.873,3.112,1.545,4.878,1.978v2.604c0,1.383,1.088,2.498,2.471,2.498h4.128 c1.383,0,2.488-1.115,2.488-2.498v-2.605c1.767-0.432,3.371-1.104,4.869-1.977l1.817,1.812c0.474,0.475,1.104,0.735,1.775,0.735 c0.67,0,1.301-0.261,1.774-0.733l2.92-2.917c0.473-0.472,0.732-1.103,0.734-1.772c0-0.67-0.262-1.299-0.734-1.773l-1.75-1.77 c0.92-1.514,1.627-3.179,2.08-4.943h2.438c1.383,0,2.52-1.087,2.52-2.471v-4.125C45.973,19.555,44.837,18.443,43.454,18.443z M22.976,30.85c-4.378,0-7.928-3.517-7.928-7.852c0-4.338,3.55-7.85,7.928-7.85c4.379,0,7.931,3.512,7.931,7.85 C30.906,27.334,27.355,30.85,22.976,30.85z"></path> </g> </g> </g></svg>    
                    </a> 
                        <!-- Modal -->
                        <div class="modal fade" id="managesection" tabindex="-1" role="dialog" aria-labelledby="newsectionLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <!--<h5 class="modal-title" id="managesectionLabel">All Sections</h5>-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-striped">
                                        @foreach($sections as $section)
                                        <tr>
                                            <td>{{$section->name}} </td>
                                            <td>
                                                <?php $findmediabyslug=\DB::table('medias')->where('link_id',$section->slug)->get();?>
                                                @if(count($findmediabyslug)==0)
                                                <form action="{{ route('sections.destroy', $section->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-xs text-white" onclick="return confirm('Are you sure you want to delete?')">
                                                        <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 470.713 470.714" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M96.01,133.456c3.884,2.676,8.163,4.332,12.619,5.292c-5.324,99.039-15.803,202.436,20.416,296.978 c1.742,4.545,4.938,7.389,8.604,8.846c1.26,1.762,3.052,3.326,5.637,4.479c64.729,28.746,133.522,27.487,199.892,4.459 c8.674-3.012,11.314-11.243,9.735-18.256c12.604-95.928,24.562-194.694,14.67-291.43c7.83-1.725,15.147-5.027,20.586-11.075 c10.745-11.959,8.679-27.345,3.387-41.068c0.011-3.816-1.787-7.467-5.87-9.973c-1.62-1.254-3.544-2.127-5.596-2.59 c-29.727-12.703-61.367-19.342-93.734-22.427c0.569-2.892,0.32-6.058-1.081-9.308C275.168,24.077,255.044-3.4,226.105,0.345 c-27.863,3.603-41.365,30.793-47.007,55.726c-18.611,0.978-37.039,2.207-55.035,3.245c-0.125,0.005-0.236,0.048-0.36,0.058 c-0.854-0.109-1.722-0.163-2.61-0.058c-19.291,2.267-35.53,11.491-43.975,29.609c-1.123,2.407-1.678,4.948-1.737,7.439 c-0.749,2.455-0.8,5.278,0.239,8.444C79.532,116.676,85.656,126.312,96.01,133.456z M324.105,428.545 c-54.888,16.904-112.16,18.712-165.844-5.129c-0.815-0.36-1.623-0.579-2.422-0.802c-32.966-90.754-22.635-189.447-17.514-284.177 c65.534-4.644,131.547-5.657,196.814,2.567c0.771,0.812,1.655,1.518,2.646,2.138C347.57,237.831,336.404,334.526,324.105,428.545z M228.662,29.693c12.937-1.676,22.006,13.327,27.591,25.111c-15.449-0.536-30.97-0.447-46.445,0 C212.948,43.419,218.445,31.013,228.662,29.693z M110.845,92.726c-1.826,1.579,4.918-2.508,2.775-1.617 c1.498-0.625,3.075-1.046,4.639-1.478c-0.358,0.099,4.903-0.879,2.833-0.64c0.183-0.021,0.355-0.074,0.536-0.1 c0.785,0.074,1.567,0.152,2.43,0.1c77.348-4.481,167.339-15.376,240.798,15.658c0.233,0.69,0.533,1.356,0.746,2.059 c0.295,1.018,0.538,2.054,0.746,3.093c0.016,0.23,0.031,0.475,0.057,0.833c0.02,0.536-0.021,1.077-0.041,1.612 c-0.01,0.045-0.035,0.15-0.051,0.203c-0.314-0.053-2.468,1.498-1.59,1.331c-1.63,0.604-3.326,1.03-5.017,1.409 c-0.808,0.183-1.874,0.312-3.082,0.406c-1.574-1.141-3.529-1.993-6.038-2.336c-75.291-10.336-150.897-9.422-226.528-3.499 c-1.364,0.109-2.595,0.406-3.761,0.779c-7.373-0.104-12.075-3.682-15.157-11.263C106.564,96.885,108.057,95.138,110.845,92.726z"></path> <path d="M186.387,186.935c-0.178-19.128-29.853-19.144-29.681,0c0.437,47.81,5.949,95.075,11.873,142.453 c2.338,18.732,32.044,18.961,29.681,0C192.332,282.005,186.824,234.744,186.387,186.935z"></path> <path d="M248.712,183.967c-1.026-19.032-30.709-19.136-29.681,0c2.829,52.483,4.723,105.01,10.39,157.293 c2.039,18.819,31.738,19.017,29.681,0C253.434,288.977,251.536,236.45,248.712,183.967z"></path> <path d="M284.857,186.427c7.993,58.711,4.169,118.058,3.92,177.089c-0.081,19.139,29.595,19.134,29.681,0 c0.26-61.896,3.393-123.445-4.98-184.983C310.902,159.648,282.308,167.723,284.857,186.427z"></path> </g> </g> </g></svg>
                                                    </button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>                                        
                                        @endforeach
                                    </table>
                                        
                                            
                                            
                                </div>   
                            </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    <a href="{{URL::to('/')}}/medias/create" class="btn btn-primary float-right"><i class="fa fa-plus-circle"></i> Upload New Picture </a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{URL::to('/')}}/medias" method="get">@csrf
                    <div class="input-group mb-3 col-6">
                      <input type="text" class="form-control" name="searchkey" placeholder="Search Picture" aria-label="Search Picture" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon2">Search</button>
                      </div>
                    </div>
                    </form>
                    <div class="col-12 mb-3">
                    <a href="{{URL::to('/')}}/medias">All Pictures</a> |
                    @foreach($sections as $section)
                    <a href="{{URL::to('/')}}/mediasbycat/{{$section->slug}}">{{$section->name}}</a> | 
                    @endforeach
                    <!--<a data-toggle="modal" data-target="#newsection" style=" cursor: pointer;">Add Section</a> -->
                        <!-- Modal -->
                        <!--<div class="modal fade" id="newsection" tabindex="-1" role="dialog" aria-labelledby="newsectionLabel" aria-hidden="true">-->
                        <!--    <div class="modal-dialog" role="document">-->
                        <!--    <div class="modal-content">-->
                        <!--        <div class="modal-header">-->
                        <!--        <h5 class="modal-title" id="newsectionLabel">New Section</h5>-->
                        <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                        <!--            <span aria-hidden="true">&times;</span>-->
                        <!--        </button>-->
                        <!--        </div>-->
                        <!--        <form action="{{URL::to('/')}}/sections" method="post">@csrf-->
                        <!--        <div class="modal-body">-->
                        <!--            <input type="text" class="form-control" placeholder="Section Name" name="name">-->
                        <!--        </div>-->
                        <!--        <div class="modal-footer">-->
                        <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                        <!--        <button type="submit" class="btn btn-primary">Save changes</button>-->
                        <!--        </div>                                -->
                        <!--        </form>-->
                        <!--    </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!-- Modal -->
                    </div>
                   <div class="row">
                       @if(count($data)==0)
                       <h5 class="ml-4">Nothing Found!</h5>
                       @endif
                        @foreach($data as $item)
                        <div class="col-3 col-md-3">
                            <form action="{{ route('medias.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm text-white" style="position: absolute;    right: 17px;    top: 0px;" onclick="return confirm('Are you sure you want to delete?')"> X</button>
                                </form>
                            <img src="{{URL::to('/')}}/application/storage/app/{{$item->source}}" class="img-fluid">
                            <p>{{$item->name}}</p>
                        </div>
                        @endforeach
                        </div>
                        {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
