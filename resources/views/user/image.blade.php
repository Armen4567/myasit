<?php // print_r($images) ?>
@extends('layouts.app')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <div class="col-md-8">
        <div class="card mb-3">
            <div class="images" style="padding: 10px">
                <form method="post" enctype="multipart/form-data" action="{{ route('user.create.image', $album_id)}}" >
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="image">Create Image</label>
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  autocomplete="image" autofocus>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Create Image</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="photo-gallery">
            <div class="container">
                <div class="row">
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" hr ef="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{asset('storage/'.$image -> name)}}" data-target="#image-gallery">
                                    <img class="img-thumbnail" style="object-fit: cover; height: 200px; width: 650px;" src="{{asset('storage/'.$image -> name)}}" alt="Another alt text">
                                </a>
                            </div>
                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="image-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="image-gallery-image"  style="height: 500px; object-fit: contain" class="img-responsive col-md-12" src="">
                                        </div>
                                        <div class="modal-footer" style="justify-content: space-between">
                                            <form action="{{route('user.destroy.image', $image->id)}}" method="post" class="p-2 flex-grow-1">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-xs" data-title="Delete"  type="submit" data-toggle="modal" data-target="#delete" >
                                                    <span class="glyphicon glyphicon-trash"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                            </button>

                                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

    </div>
    </div>


<!------ Include the above in your HEAD tag ---------->

{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="row">--}}
{{--            @foreach($images as $image)--}}
{{--            <div class="col-lg-3 col-md-4 col-xs-6 thumb">--}}
{{--                <a class="thumbnail" hr ef="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{asset('storage/'.$image -> name)}}" data-target="#image-gallery">--}}
{{--                    <img class="img-thumbnail" style="object-fit: cover; height: 200px; width: 650px;" src="{{asset('storage/'.$image -> name)}}" alt="Another alt text">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-lg">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h4 class="modal-title" id="image-gallery-title"></h4>--}}
{{--                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <img id="image-gallery-image"  style="height: 500px; object-fit: contain" class="img-responsive col-md-12" src="">--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>--}}
{{--                        </button>--}}

{{--                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}
{{--</div>--}}
{{--</div>--}}


    <script >
        let modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function () {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function () {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });

    </script>@endsection
