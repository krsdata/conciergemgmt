@extends('admin.mainframe')
@section('content')

<style type="text/css">
    .galleryImgBox {
        text-align: center;
    }
    .galleryImgBox img{
        width: 100%;
        height: 100px;
        border: 1px solid #ccc;
    }
    .galleryImgBox a{
        color: #f00;
        text-decoration: none;
        font-size: 14px;
    }
</style>

<?php
    $extra = array();
    $dest_id = 0;
    foreach($seoTools as $bd){
        $extra[$bd->key] = $bd->value;
        $dest_id = $bd->dest_id;
    }
?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Destination</li>
        </ol>

        @include('admin.includes.messages')

        <form method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Add Destination</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Title *</label>
                                <input required="" class="form-control col-md-8" name="title" type="text"
                                       value="<?php echo $destData['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Page Name *</label>
                                <input required="" class="form-control col-md-8" name="page_name" type="text"
                                       value="<?php echo $destData['page_name'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Slug/Link *</label>
                                <input required="" class="form-control col-md-8" name="slug" type="text" value="<?php echo $destData['slug'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Sub-caption</label>
                                <input class="form-control col-md-8" name="sub_caption" type="text" value="<?php echo $destData['sub_caption'] ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Category *</label>
                                <select class="form-control col-md-8" name="cat_id" required="">
                                    <option value="">Please Select</option>
                                    <?php foreach ($destCats as $key => $value) {
                                        $selected = '';
                                        if($key == $destData['cat_id'])
                                            $selected = 'selected="selected"';
                                    ?>
                                    <option value="<?php echo $key ?>" <?php echo $selected ?>><?php echo $value ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Destination list order *</label>
                                <select class="form-control col-md-8" name="sort">
                                    <option value="0">Don't show</option>
                                    <?php for($x = 1; $x <= 25; $x++) {
                                        echo '<option value="' . $x . '"';
                                        if($x == $destData['sort']) echo ' selected';
                                        echo '>' . $x . '</option>';
                                    } ?>
                                </select>
                            </div>
                            
                             <div class="form-group">
                                <label class="font-weight-bold">Short description</label>
                                <textarea class="form-control col-md-12" name="short_description"><?php echo $destData['short_description'] ?></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php /* 
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Slider Images</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="featured_slider" value="<?php echo $destData['featured_slider'] ?>" id="selected-slider">
                            <label id="slider-image-title"><?php echo $destData['slider_title'] ?></label>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#slider-select">Add Slider&nbsp;&nbsp;<span
                                        class="fas fa-images"></span></button>
                        </div>
                    </div> 
                    */ ?>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Featured Image</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="featured_image" id="selected-image" value="<?php echo $destData['featured_image'] ?>">
                            
                            <img src="<?php echo $destData['featured_image'] ?>" alt="Preview" id="preview-image" style="width: 100%;">
                            <!--<input type="file" name="featured_image" class="form-control" />-->
                        </div>

                        <div class="card-footer">
                            <button type="button" id="featured-image" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#file-manager">Set Featured Image &nbsp;&nbsp; <span class="fas fa-image"></span></button>
                        </div>

                    </div>

                    <hr/>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Publish</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if($destData['status'] == '1') echo 'selected="selected"' ?>>Active</option>
                                        <option value="0" <?php if($destData['status'] == '0') echo 'selected="selected"' ?>>Inactive</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="row">
                                
                                <div class="col">
                                     <a href="@if($destData['slug'] == '/'){{ url('/') }}@else{{ url('/'.$destData['slug']) }}@endif" target="_blank" class="mt-4 btn btn-outline-info btn-block">Preview</a>
                                </div> 
                                <div class="col">
                                    <button type="submit" class="mt-4 btn btn-outline-success btn-block">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Heading and Content start-->    
                <div class="col-md-12">    
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Heading and Content</span>
                                <button type="button" id="addheadingcontent2" class="btn btn-info btn-sm pull-right">+ Add more</button>
                            </div>
                        </div>
                        
                        <div class="card-body" id="headingcontentRowTwo">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Heading</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Content</label>
                                    </div>
                                </div>
                            </div>

                            <?php 
                                if(!empty($detailData)) 
                                {
                                    $i = 1; 
                                    for($key = 0; $key < count($detailData); $key++)
                                    {
                            ?>  
                            <div class="row" id="headingcontentFieldsTwo<?php echo $i ?>">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="heading[]" type="text" value="<?php echo $detailData[$key]['heading']; ?>">
                                    </div>
                                    <button type="button" id="HCTwoDel_<?php echo $i ?>" data-id="<?php echo $i ?>" class="btn btn-danger btn-sm deleteHC2"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                 <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea name="content[]" class="contentTwo<?php echo $i ?>"><?php echo $detailData[$key]['content']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;  }} ?>

                            <?php for($i = count($detailData)+1 ; $i <= 30; $i++){ ?>
                            <div class="row" id="headingcontentFieldsTwo<?php echo $i ?>" <?php if($i != 1){ ?> style="display:none; " <?php } ?>>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="heading[]" type="text" value="">
                                    </div>
                                    <button type="button" id="HCTwoDel_<?php echo $i ?>" data-id="<?php echo $i ?>" class="btn btn-danger btn-sm deleteHC2"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                 <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea name="content[]" class="contentTwo<?php echo $i ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <input type="hidden" id="totalHC2" name="totalHC2" value="<?php if(!empty($detailData)) echo count($detailData); else echo '1' ?>">
                        </div>
                    </div>
                </div>
                <!--Heading and Content end-->

                <!--Gallery Image start-->
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Gallery Images</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="file" multiple="" name="gallery_images[]" class="form-control col-md-4" />
                            <small>(Press Ctrl/Command to select multiple)</small>
                        
                        
                            <div class="row">
                                <?php
                                    if(!empty($destImages)) {
                                        foreach ($destImages as $img) {
                                            $delUrl = url('/dashboard/deleteDestinationImages/').'/'.$img->id;
                                ?>
                                    <div class="col-md-2 mt-3 galleryImgBox">
                                        <img src="<?php echo asset('/photos/2/destination/'.$img->img_name); ?>">
                                        <a href="{{ $delUrl }}">Delete</a>
                                    </div>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Image end-->

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
                                <textarea name="meta_key" class="form-control"><?php echo $destData['meta_key'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Meta Description</label>
                                <textarea name="meta_description" class="form-control"><?php echo $destData['meta_description'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SEO Brad Data</label>
                                <textarea name="seo_brad_data" maxlength="1000" rows="10" class="form-control"><?php if(isset($extra['seo_brad_data'])) echo $extra['seo_brad_data'] ?></textarea>
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
                                            <textarea maxlength="250" name="jkeyword1" class="form-control" style="min-height: 100px;"><?php echo $destData['jkeyword1'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea maxlength="250" name="jkeyword2" class="form-control" style="min-height: 100px;"><?php echo $destData['jkeyword2'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea maxlength="250" name="jkeyword3" class="form-control" style="min-height: 100px;"><?php echo $destData['jkeyword3'] ?></textarea>
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
                                            <textarea name="urlranking1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking1'])) echo $extra['seo_brad_data'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="urlranking2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking2'])) echo $extra['seo_brad_data'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="urlranking3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking3'])) echo $extra['seo_brad_data'] ?></textarea>
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
                                            <textarea name="exactkey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey1'])) echo $extra['exactkey1'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="exactkey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey2'])) echo $extra['exactkey2'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="exactkey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey3'])) echo $extra['exactkey3'] ?></textarea>
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
                                            <textarea name="densitykey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey1'])) echo $extra['densitykey1'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="densitykey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey2'])) echo $extra['densitykey2'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="densitykey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey3'])) echo $extra['densitykey3'] ?></textarea>
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
                                            <textarea name="varkey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey1'])) echo $extra['varkey1'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="varkey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey2'])) echo $extra['varkey2'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="varkey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey3'])) echo $extra['varkey3'] ?></textarea>
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
                                            <textarea name="lsikey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey1'])) echo $extra['lsikey1'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="lsikey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey2'])) echo $extra['lsikey2'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="lsikey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey3'])) echo $extra['lsikey3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Words/Character-->    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Total Words & Characters</b></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Total Words</label>
                                            <input readonly="" id="total_words" class="form-control" value="<?php if(isset($extra['total_words'])) echo $extra['total_words'] ?>" /> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Total Characters</label>
                                            <input readonly="" id="total_chars" class="form-control" value="<?php if(isset($extra['total_chars'])) echo $extra['total_chars'] ?>" />
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