@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Page</li>
        </ol>

        @include('admin.includes.messages')

        <form method="POST" action="{{ url('/dashboard/pages/add') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Add a Page</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Title *</label>
                                <input class="form-control col-md-8" name="title" type="text"
                                       value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Page Name *</label>
                                <input class="form-control col-md-8" name="page_name" type="text"
                                       value="{{ old('page_name') }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Slug/Link</label>
                                <input class="form-control col-md-8" name="slug" type="text" value="{{ old('slug') }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Sub-caption</label>
                                <input class="form-control col-md-8" name="sub_caption" type="text" value="{{ old('sub_caption') }}">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Content</label>
                                <textarea name="content" class="form-control my-editor"
                                          style="min-height: 500px;">{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Book Now Script</label>
                                            <textarea name="page_script" class="form-control" style="min-height: 100px;">{{ old('page_script') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Preview/Publish</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Custom template</label>
                                <select class="form-control" name="template">
                                    <option value="">Select a custom template...</option>
                                    @if(!empty($templates))
                                        @foreach($templates as $tmp)
                                            <option value="{{ $tmp }}">{{ $tmp }}</option>
                                            @endforeach
                                        @endif
                                </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-info btn-block">Preview</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-success btn-block">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Slider Images</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="featured_slider" id="selected-slider">
                            <label id="slider-image-title"></label>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#slider-select">Add Slider&nbsp;&nbsp;<span
                                        class="fas fa-images"></span></button>
                        </div>
                    </div>
                    <hr/>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Featured Image</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="image" id="selected-image" value="{{ old('image') }}">
                            <img src="{{ old('image') }}" alt="Preview" id="preview-image" style="width: 100%;">
                        </div>
                        <div class="card-footer">
                            <button type="button" id="featured-image" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#file-manager">Set Featured Image&nbsp;&nbsp;<span
                                        class="fas fa-image"></span></button>
                        </div>
                    </div>
                    <!--hr/>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Contact Form</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="contact_form" id="contact-form-selected">
                            <label id="contact-form-title"></label>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#contact-form-select">Add Contact Form&nbsp;&nbsp;<span
                                        class="fas fa-images"></span></button>
                        </div>
                    </div-->
                </div>

                <!--SEO Tools Start-->
                <div class="col-md-12 seo-tools">
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">SEO Tools</span>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Meta Keyword</label>
                                <textarea name="meta_key" class="form-control"
                                          >{{ old('meta_key') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Meta Description</label>
                                <textarea name="meta_description" class="form-control"
                                          >{{ old('meta_description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SEO Brad Data</label>
                                <textarea name="seo_brad_data" maxlength="1000" rows="10" class="form-control">{{ old('seo_brad_data') }}</textarea>
                            </div>

                            <!--Joe's Keyword start-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Joe's Keyword</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea maxlength="250" name="jkeyword1" class="form-control" style="min-height: 100px;">{{ old('jkeyword1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea maxlength="250" name="jkeyword2" class="form-control" style="min-height: 100px;">{{ old('jkeyword2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea maxlength="250" name="jkeyword3" class="form-control" style="min-height: 100px;">{{ old('jkeyword3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Joe's Keyword end-->

                            <!--URL Ranking Keyword-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>URL Ranking</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea name="urlranking1" class="form-control" style="min-height: 100px;">{{ old('urlranking1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="urlranking2" class="form-control" style="min-height: 100px;">{{ old('urlranking2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="urlranking3" class="form-control" style="min-height: 100px;">{{ old('urlranking3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!--Total Exact Keyword-->    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Total Exact Keyword</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea name="exactkey1" class="form-control" style="min-height: 100px;">{{ old('exactkey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="exactkey2" class="form-control" style="min-height: 100px;">{{ old('exactkey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="exactkey3" class="form-control" style="min-height: 100px;">{{ old('exactkey3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Density Keyword-->    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Density Keyword</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea name="densitykey1" class="form-control" style="min-height: 100px;">{{ old('densitykey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="densitykey2" class="form-control" style="min-height: 100px;">{{ old('densitykey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="densitykey3" class="form-control" style="min-height: 100px;">{{ old('densitykey3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Variation Keyword-->    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Variation Keyword</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea name="varkey1" class="form-control" style="min-height: 100px;">{{ old('varkey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="varkey2" class="form-control" style="min-height: 100px;">{{ old('varkey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="varkey3" class="form-control" style="min-height: 100px;">{{ old('varkey3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total LSI Keyword-->    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>LSI Keyword</b></h6>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 1</label>
                                            <textarea name="lsikey1" class="form-control" style="min-height: 100px;">{{ old('lsikey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="lsikey2" class="form-control" style="min-height: 100px;">{{ old('lsikey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="lsikey3" class="form-control" style="min-height: 100px;">{{ old('lsikey3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SEO Tools End-->
            </div>
        </form>
    </div>
    <br/>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute: "{{ url('/') }}/",
            selector: "textarea.my-editor",
            valid_elements : '*[*]',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'dashboard/media?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection