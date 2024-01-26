@extends('layouts.app')

@section('content')
<style>
    .ckbx {
  display:none;
}
  .ckbx + img{
      border:1px solid #fff;
  }

  .ckbx:checked + img{
      border:1px solid #007bff;
      border-radius:0;
  }
.not-allowed {cursor: not-allowed;}
.pointer {cursor: pointer;}
.modal-body{
    height:70vh;
    overflow-y:scroll;
}
.Ariful{
    color:#ff8288;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Page
                    <a href="{{URL::to('pages')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Name</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Page Name/Menu">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Parent Menu (Optional)</label>
                                <select class="form-control" id="parent_page" name="parent_page">
                                    <option value="0">Select Parent Menu</option>
                                    @forelse($parentMenus as $parentMenu)
                                    <option value="{{$parentMenu->id}}">{{$parentMenu->name}}</option>
                                    <?php $subpage=App\Pages::where('parent_page',$parentMenu->id)->get();?>
                                        @if(count($subpage)>0)
                                            @forelse($subpage as $subpageItem)
                                            <option value="{{$subpageItem->id}}">&nbsp;&nbsp;-{{$subpageItem->name}}</option>
                                            @empty
                                            @endforelse
                                        @endif
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputTitle" class="h6">Title</label>
                                <input type="text" class="form-control" id="title"  name="title" placeholder="Page Title">
                            </div>
                            <p class="btn btn-outline-primary shadow-sm mt-5 pb-2" style="margin-left: 15px;" data-toggle="modal" data-target="#addmedia">
                                <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M356.4 168.9h318.1c15.3 0 27.7 12.4 27.7 27.7v83H328.7v-83c0-15.3 12.4-27.7 27.7-27.7z" fill="#FFFFFF"></path><path d="M729.8 307.2H301V196.6c0-30.5 24.8-55.3 55.3-55.3h318.1c30.5 0 55.3 24.8 55.3 55.3v110.6z m-373.4-55.3h318.1v-55.3H356.3l0.1 55.3z" fill="#333333"></path><path d="M162.8 238.1h691.5c15.3 0 27.7 12.4 27.7 27.7v497.9c0 15.3-12.4 27.7-27.7 27.7H162.8c-15.3 0-27.7-12.4-27.7-27.7V265.8c0-15.4 12.4-27.7 27.7-27.7z" fill="#FFFFFF"></path><path d="M826.6 791.3H190.4c-30.5 0-55.3-24.8-55.3-55.3V293.4c0-30.5 24.8-55.3 55.3-55.3h636.2c30.5 0 55.3 24.8 55.3 55.3v442.5c0 30.5-24.8 55.4-55.3 55.4zM190.4 293.4v442.5h636.2V293.3H190.4z" fill="#333333"></path><path d="M328.7 514.7a186.7 179.8 0 1 0 373.4 0 186.7 179.8 0 1 0-373.4 0Z" fill="#8CAAFF"></path><path d="M515.4 722.1c-118.2 0-214.4-93-214.4-207.4s96.2-207.4 214.4-207.4 214.4 93.1 214.4 207.4S633.6 722.1 515.4 722.1z m0-359.6c-87.7 0-159 68.2-159 152.1S427.7 666.8 515.4 666.8s159-68.2 159-152.1-71.3-152.2-159-152.2z" fill="#333333"></path><path d="M439.3 514.7a76.1 69.1 0 1 0 152.2 0 76.1 69.1 0 1 0-152.2 0Z" fill="#FFFFFF"></path><path d="M515.4 611.5c-57.2 0-103.7-43.4-103.7-96.8s46.5-96.8 103.7-96.8 103.7 43.4 103.7 96.8-46.5 96.8-103.7 96.8z m0-138.3c-26.7 0-48.4 18.6-48.4 41.5s21.7 41.5 48.4 41.5 48.4-18.6 48.4-41.5-21.7-41.5-48.4-41.5z" fill="#333333"></path></g></svg>
                                Add media</p>
                            <div class="form-group col-md-9">
                                <label for="exampleInputDetails" class="h6">Details</label>
                                <textarea name="details" id="tinyMceFull" class="form-control" rows="11"></textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputTitle" class="h6">Page Serial</label>
                                <input type="number" class="form-control" id="sorts"  name="sorts" placeholder="Page Serial">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputTitle" class="h6">Page Link</label>
                                <input type="text" class="form-control" id="links"  name="links" placeholder="Page Link">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal " id="addmedia" tabindex="-1"  data-backdrop="static"  aria-labelledby="addmediaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl h-75">
        <div class="modal-content rounded-0 shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="addmediaLabel">Select Media</h5>
                <button type="button" class="close" id="modal_close_btn"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <form id="myForm">
            <div class="modal-body" id="loadedmedia">
            @php
                $medias=\DB::table('medias')->limit(10)->orderBy('id','desc')->get();
            @endphp
             @foreach($medias as $media)
                    <label class="shadow rounded-0 ">
                        <input type="checkbox" name="img_id" id="myInput" value="{{$media->id}}" class="ckbx " autocomplete="off">
                        <img src="{{URL::to('/')}}/application/storage/app/{{$media->source}}" alt="media image" class="img-thumbnail img-check " style="height:80px!important">
                    </label>
              @endforeach
            </div>
            <div class="modal-footer" >
                <svg aria-hidden="true" id="spinnerLoad" focusable="false" data-prefix="fas" data-icon="sun" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-sun fa-w-16 fa-spin fa-lg   Ariful Hoque " style="height:20px; display:none"><path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z" class="shadow" ></path></svg>
                <input type="submit" name="" value="Insert" class="btn btn-primary btn-sm px-3 shadow-sm not-allowed" id="insertBtn" disabled >
            </div>
       </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $('#myForm').on('submit', function( event ) {
     var  urlmain ="{{URL::to('/')}}/application/storage/app/";
      event.preventDefault();
      var medias_id = $(this).serialize();
      $('#insertBtn').attr('disabled',true);
      $('#spinnerLoad').show();
      $('#insertBtn').addClass('not-allowed');
      $.ajax({
          method:"POST",
          url:"{{ route('get_medias') }}",
          dataType: 'json',
          data: {
              '_token':"{{ csrf_token() }}",
              medias_id :medias_id,
          },
          success: function (data) {
              $('#spinnerLoad').hide();
              $.each(data.data, function (index, value) {
                  var imgs = '<p>';
                  imgs += '<img src="'+urlmain+value.source+'" data-mce-src="'+urlmain+value.source+'"   style="width:180px!important">';
                  imgs += '</p>';
                  tinymce.activeEditor.insertContent(imgs);
                  $('#addmedia').modal('hide');
                   CheckUncheck();
                   btnPower();
                 })
          },
          error: function () {
               alert("system doesn't  get any data");
          }
      })
  });
    $("input:checkbox[name='img_id']").click(function(){
            btnPower();
    });
    $("input:checkbox[name='img_id']").on("change", function () {
            btnPower();
        });
        $('#modal_close_btn').click(function(){
            CheckUncheck();
            $('#addmedia').modal('hide');
        });
        function CheckUncheck(){
                if ($("input:checkbox").prop("checked")) {
                    $("input:checkbox[name='img_id']").prop("checked", true);
            } else {
                $("input:checkbox[name='img_id']").prop("checked", false);
            }
        }
        function btnPower(){
            var total_check_boxes = $("input:checkbox[name='img_id']").length;
            var total_checked_boxes = $("input:checkbox[name='img_id']:checked").length;
            if (0 < total_checked_boxes) {
                $('#insertBtn').attr('disabled',false); 
                $('#insertBtn').removeClass('not-allowed');
            }
            else {
                $('#insertBtn').attr('disabled',true);
                $('#insertBtn').addClass('not-allowed');
            }
        }
    });
   </script>
@endsection
