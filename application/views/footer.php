
<footer><div class="time"><p class="text-center">time</p></div></footer>
</div><!-- /.container-->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://cdn.bootcss.com/moment.js/2.18.1/moment.js"></script>
<script src="https://cdn.bootcss.com/moment.js/2.18.1/locale/zh-cn.js"></script>
<script src="<?=base_url('resources/js/fine-uploader/jquery.fine-uploader.min.js')?>"></script>
<script src="<?=base_url('resources/js/jquery.cxselect.js')?>"></script>


<script type="text/javascript">
// 时间设置
    $(".time p").html(moment().format("LLLL"))
    // var date = new Date(1398250549490);
    // Y = date.getFullYear() + '-';
    // M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
    // D = date.getDate() + ' ';
    // h = date.getHours() + ':';
    // m = date.getMinutes() + ':';
    // s = date.getSeconds();
</script>

<script>
    $('#fine-uploader-gallery').fineUploader({
        debug: true,
        template: 'qq-template-gallery',
        request: {
            endpoint: '<?=site_url('course/'.$cursor->id.'/upload')?>'
        },
        retry:{
            enableAuto: true,
        },
        deleteFile: {
            enabled: true, // defaults to false
            endpoint: '/my/delete/endpoint',
        },
        thumbnails: {
            placeholders: {
                waitingPath: '<?=base_url('resources/image/fine-uploader/placeholders/waiting-generic.png')?>',
                notAvailablePath: '<?=base_url('resources/image/fine-uploader/placeholders/not_available-generic.png')?>'
            }
        },
        autoUpload: false,
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png', 'swf', 'mp4']
        }
    });
    $('#trigger-upload').click(function() {
        $('#fine-uploader-gallery').fineUploader('uploadStoredFiles');
   });
</script>

</body>
</html>
