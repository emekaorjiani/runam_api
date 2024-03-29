<!DOCTYPE html>
<html lang="en">
<head>
    <title class="text-center">RUN AM: Image Source Verify</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

    <style>
        .dropzone {
            background: #ccbc6c;
            border-radius: 13px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
            border: 2px dotted #ffd400;
            margin-top: 50px;
        }
        html{line-height:1.15;-ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%}
        body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}
        figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em
           }
         h1,h2{
            color: #d98d02;
         }
        a{
            background-color:transparent;
            color: #da9e08;
            -webkit-text-decoration-skip:objects}
        abbr[title]{border-bottom:none;text-decoration:underline;
         text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;
        font-size:1em}dfn{font-style:italic}mark{background-color: #ffd400;color:#000}  small{font-size:80%}
        sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}  sub{bottom:-.25em}  sup{top:-.5em}
        audio,video{display:inline-block}  audio:not([controls]){display:none;height:0}  img{border-style:none}
        svg:not(:root){overflow:hidden}  button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}
        button,input{overflow:visible}  button,select{text-transform:none}  button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
        button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}
        button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}
        fieldset{padding:.35em .75em .625em}  legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}
        progress{display:inline-block;vertical-align:baseline}  textarea{overflow:auto}  [type=checkbox],[type=radio]{box-sizing:border-box;padding:0}
        [type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}  [type=search]{-webkit-appearance:textfield;outline-offset:-2px}
        [type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}  ::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}  details,menu{display:block}
        summary{display:list-item}  canvas{display:inline-block}
        template{display:none}  [hidden]{display:none}  html{height:100%}  fieldset{margin:0;padding:0;-webkit-margin-start:0;-webkit-margin-end:0;
          -webkit-padding-before:0;-webkit-padding-start:0;-webkit-padding-end:0;-webkit-padding-after:0;border:0}  legend{margin:0;padding:0;display:block;
             -webkit-padding-start:0;-webkit-padding-end:0}
        .choices{position:relative;margin-bottom:24px;font-size:16px}  .choices:focus{outline:none}
        .choices:last-child{margin-bottom:0}  .choices.is-disabled .choices__inner,.choices.is-disabled
        .choices__input{background-color:#eaeaea;cursor:not-allowed;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
        .choices.is-disabled .choices__item{cursor:not-allowed}  .choices[data-type*=select-one]{cursor:pointer}  .choices[data-type*=select-one] .choices__inner{padding-bottom:7.5px}
        .choices[data-type*=select-one] .choices__input{display:block;width:100%;padding:10px;border-bottom:1px solid #ddd;background-color:#fff;margin:0}
        .choices[data-type*=select-one] .choices__button{background-image:url(../../icons/cross-inverse.svg);padding:0;background-size:8px;height:100%;position:absolute;top:50%;right:0;margin-top:-10px;margin-right:25px;height:20px;width:20px;border-radius:10em;opacity:.5}
        .choices[data-type*=select-one] .choices__button:hover,.choices[data-type*=select-one] .choices__button:focus{opacity:1}  .choices[data-type*=select-one]
                                                                                                                                                                                                                                                                                                                                                                                                             .choices__button:focus{box-shadow:0 0 0 2px #ffd400
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           }  .choices[data-type*=select-one]:after{content:"";height:0;width:0;border-style:solid;border-color:#333 transparent transparent transparent;border-width:5px;position:absolute;right:11.5px;top:50%;margin-top:-2.5px;pointer-events:none}  .choices[data-type*=select-one].is-open:after{border-color:transparent transparent #333 transparent;margin-top:-7.5px}  .choices[data-type*=select-one][dir=rtl]:after{left:11.5px;right:auto}  .choices[data-type*=select-one][dir=rtl] .choices__button{right:auto;left:0;margin-left:25px;margin-right:0}  .choices[data-type*=select-multiple] .choices__inner,.choices[data-type*=text] .choices__inner{cursor:text}  .choices[data-type*=select-multiple] .choices__button,.choices[data-type*=text] .choices__button{position:relative;display:inline-block;margin-top:0;margin-right:-4px;margin-bottom:0;margin-left:8px;padding-left:16px;border-left:1px solid #ffd400;background-image:url(../../icons/cross.svg);background-size:8px;width:8px;line-height:1;opacity:.75}  .choices[data-type*=select-multiple] .choices__button:hover,.choices[data-type*=select-multiple] .choices__button:focus,.choices[data-type*=text] .choices__button:hover,.choices[data-type*=text] .choices__button:focus{opacity:1}  .choices__inner{display:inline-block;vertical-align:top;width:100%;background-color:#f9f9f9;padding:7.5px 7.5px 3.75px;border:1px solid #ddd;border-radius:2.5px;font-size:14px;min-height:44px;overflow:hidden}  .is-focused .choices__inner,.is-open .choices__inner{border-color:#b7b7b7}  .is-open .choices__inner{border-radius:2.5px 2.5px 0 0}  .is-flipped.is-open .choices__inner{border-radius:0 0 2.5px 2.5px}  .choices__list{margin:0;padding-left:0;list-style:none}  .choices__list--single{display:inline-block;padding:4px 16px 4px 4px;width:100%}  [dir=rtl] .choices__list--single{padding-right:4px;padding-left:16px}  .choices__list--single .choices__item{width:100%}  .choices__list--multiple{display:inline}  .choices__list--multiple .choices__item{display:inline-block;vertical-align:middle;border-radius:20px;padding:4px 10px;font-size:12px;font-weight:500;margin-right:3.75px;margin-bottom:3.75px;background-color:#00bcd4;border:1px solid #00a5bb;color:#fff;word-break:break-all}  .choices__list--multiple .choices__item[data-deletable]{padding-right:5px}  [dir=rtl] .choices__list--multiple .choices__item{margin-right:0;margin-left:3.75px}  .choices__list--multiple .choices__item.is-highlighted{background-color:#00a5bb;border:1px solid #008fa1}  .is-disabled .choices__list--multiple .choices__item{background-color:#aaa;border:1px solid #919191}  .choices__list--dropdown{display:none;z-index:1;position:absolute;width:100%;background-color:#fff;border:1px solid #ddd;top:100%;margin-top:-1px;border-bottom-left-radius:2.5px;border-bottom-right-radius:2.5px;overflow:hidden;word-break:break-all}  .choices__list--dropdown.is-active{display:block}  .is-open .choices__list--dropdown{border-color:#b7b7b7}  .is-flipped .choices__list--dropdown{top:auto;bottom:100%;margin-top:0;margin-bottom:-1px;border-radius:.25rem .25rem 0 0}  .choices__list--dropdown .choices__list{position:relative;max-height:300px;overflow:auto;-webkit-overflow-scrolling:touch;will-change:scroll-position}  .choices__list--dropdown .choices__item{position:relative;padding:10px;font-size:14px}  [dir=rtl] .choices__list--dropdown .choices__item{text-align:right}@media(min-width:640px){.choices__list--dropdown .choices__item--selectable{padding-right:100px}  .choices__list--dropdown .choices__item--selectable:after{content:attr(data-select-text);font-size:12px;opacity:0;position:absolute;right:10px;top:50%;transform:translateY(-50%)}  [dir=rtl] .choices__list--dropdown .choices__item--selectable{text-align:right;padding-left:100px;padding-right:10px}  [dir=rtl] .choices__list--dropdown .choices__item--selectable:after{right:auto;left:10px}}  .choices__list--dropdown .choices__item--selectable.is-highlighted{background-color:#f2f2f2}  .choices__list--dropdown .choices__item--selectable.is-highlighted:after{opacity:.5}  .choices__item{cursor:default}  .choices__item--selectable{cursor:pointer}  .choices__item--disabled{cursor:not-allowed;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;opacity:.5}  .choices__heading{font-weight:600;font-size:12px;padding:10px;border-bottom:1px solid #f7f7f7;color:gray}  .choices__button{text-indent:-9999px;-webkit-appearance:none;-moz-appearance:none;appearance:none;border:0;background-color:transparent;background-repeat:no-repeat;background-position:center;cursor:pointer}  .choices__button:focus{outline:none}  .choices__input{display:inline-block;vertical-align:baseline;background-color:#f9f9f9;font-size:14px;margin-bottom:5px;border:0;border-radius:0;max-width:100%;padding:4px 0 4px 2px}  .choices__input:focus{outline:0}  [dir=rtl] .choices__input{padding-right:2px;padding-left:0}  .choices__placeholder{opacity:.5}  *{box-sizing:border-box}  .s004{min-height:100vh;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;font-family:poppins,sans-serif;background:url(../images/Searchs_004.png);background-size:cover;background-position:center center;padding:15px}  .s004 form{width:100%;max-width:790px}  .s004 form legend{font-size:36px;color:#fff;font-weight:800;text-align:center;margin-bottom:50px}  .s004 form .inner-form{width:100%;margin-bottom:17px}  .s004 form .inner-form .input-field{width:100%;position:relative}  .s004 form .inner-form .input-field .choices{margin-bottom:0}  .s004 form .inner-form .input-field .choices .choices__inner{min-height:70px;width:100%;background:0 0;border:0;background:#fff;display:block;width:100%;padding:10px 70px 10px 32px;font-size:18px;color:#666;border-radius:34px;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center}  .s004 form .inner-form .input-field .choices .choices__inner .choices__list .choices__item{background:#e7e7e7;color:#333;line-height:33px;border:0;padding:0 20px;font-size:16px}  .s004 form .inner-form .input-field .choices .choices__inner .choices__list .choices__item .choices__button{border-left:0;color:#b2b2b2;background-image:url(../images/icons/close.svg);background-size:14px auto;padding-left:0;opacity:.3;transition:all .2s ease-out,color .2s ease-out}  .s004 form .inner-form .input-field .choices .choices__inner .choices__list .choices__item .choices__button:hover{opacity:1}  .s004 form .inner-form .input-field .choices .choices__inner .choices__input{font-size:16px;color:#333;background-color:transparent;margin-bottom:0}  .s004 form .inner-form .input-field .choices .choices__list--dropdown{background:0 0;font-size:16px;color:#fff;border:0;padding:0 32px}  .s004 form .inner-form .input-field .choices .choices__list--dropdown .choices__item{font-size:13px;height:25px;line-height:1.3;padding:0;padding-top:5px;opacity:.7}  .s004 form .inner-form .input-field .btn-search{width:70px;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;position:absolute;right:0;top:0;height:100%;background:0 0;border:0;padding:0;cursor:pointer;display:flex;-ms-flex-pack:center;justify-content:center;align-items:center}  .s004 form .inner-form .input-field .btn-search svg{fill:#333;width:40px;height:40px;transition:all .2s ease-out,color .2s ease-out}  .s004 form .inner-form .input-field .btn-search:hover,.s004 form .inner-form .input-field .btn-search:focus{outline:0;box-shadow:none}  .s004 form .inner-form .input-field .btn-search:hover svg,.s004 form .inner-form .input-field .btn-search:focus svg{fill:#000}  .s004 form .suggestion-wrap{padding:0 15px}  .s004 form .suggestion-wrap span{font-size:14px;font-family:helvetica,sans-serif;display:inline-block;padding:0 15px;line-height:32px;color:#fff;border-radius:16px;margin-right:10px;margin-bottom:10px}
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Use the Run Am Image Verification Feature</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Search by image links</a></li>
        <li><a data-toggle="tab" href="#menu1">Upload Image and Search</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3  class="text-center">Verify image by link</h3>
            <legend class="text-center">Use the Run Am Image Verification Feature to verify the authenticity of the Images in any News Content.</legend>
            <form action="{{ route('searchImage') }}" method="post">
                @csrf
                <fieldset>
                    <h6 class="text-center">Paste the image link in the search box below: (e.g., https://guardian.ng/wp-content/uploads/2020/06/Folasade-Yemi-Esan-640x360.jpg)</h6>
                    <div class="inner-form" style="padding-top: 30px">
                        <div class="input-field">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Paste your image link and Search..." name="link" style="padding-top: 20px; padding-bottom: 20px; ">
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" >
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" color="#ffff"></path>
                                </svg></button>
                                  </span>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div>
                </fieldset>
            </form>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3 class="text-center">Upload image to verify</h3>
            <legend class="text-center">Use the Run Am Image Verification Feature to verify the authenticity of the Images in any News Content.</legend>
            <h6 class="text-center">Upload the image you would want to verify the authenticity!</h6>
            <div id="dropzone">
                <form action="{{ route('dropzoneFileUpload') }}" class="dropzone" id="file-upload" enctype="multipart/form-data">
                    @csrf
                    <div class="dz-message">
                        Upload Image from device to verify
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


<script>
    var dropzone = new Dropzone('#file-upload', {
        previewTemplate: document.querySelector('#preview-template').innerHTML,
        parallelUploads: 3,
        thumbnailHeight: 150,
        thumbnailWidth: 150,
        maxFilesize: 1,
        filesizeBase: 1500,
        thumbnail: function (file, dataUrl) {
            if (file.previewElement) {
                file.previewElement.classList.remove("dz-file-preview");
                var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                for (var i = 0; i < images.length; i++) {
                    var thumbnailElement = images[i];
                    thumbnailElement.alt = file.name;
                    thumbnailElement.src = dataUrl;
                }
                setTimeout(function () {
                    file.previewElement.classList.add("dz-image-preview");
                }, 1);
            }
        }
    });

{{--    var minSteps = 6,--}}
{{--        maxSteps = 60,--}}
{{--        timeBetweenSteps = 100,--}}
{{--        bytesPerStep = 100000;--}}
{{--    dropzone.uploadFiles = function (files) {--}}
{{--        var self = this;--}}
{{--        for (var i = 0; i < files.length; i++) {--}}
{{--            var file = files[i];--}}
{{--            totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));--}}
{{--            for (var step = 0; step < totalSteps; step++) {--}}
{{--                var duration = timeBetweenSteps * (step + 1);--}}
{{--                setTimeout(function (file, totalSteps, step) {--}}
{{--                    return function () {--}}
{{--                        file.upload = {--}}
{{--                            progress: 100 * (step + 1) / totalSteps,--}}
{{--                            total: file.size,--}}
{{--                            bytesSent: (step + 1) * file.size / totalSteps--}}
{{--                        };--}}
{{--                        self.emit('uploadprogress', file, file.upload.progress, file.upload--}}
{{--                            .bytesSent);--}}
{{--                        if (file.upload.progress == 100) {--}}
{{--                            file.status = Dropzone.SUCCESS;--}}
{{--                            self.emit("success", file, 'success', null);--}}
{{--                            self.emit("complete", file);--}}
{{--                            self.processQueue();--}}
{{--                        }--}}
{{--                    };--}}
{{--                }(file, totalSteps, step), duration);--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
</script>

</body>
</html>
