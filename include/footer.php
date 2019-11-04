

<section class="footer">
    <div class="footerOuter">
        <div class="footerInner">
            <p>Powered by</p>
            <img src="/images/verilogo.png" alt="">
        </div>
    </div>
</section>

</div>
<script>
    $('#sites input:radio').addClass('input_hidden');
    $('.emoteInput').change(function() {
        $(this).parent().find('.smileyLabel').addClass('selected').parent().siblings().find('.smileyLabel').removeClass('selected');;
        $('.smileyLabel').each(function(index, i) {
            var $item = $(i);
            var imgsrc = ($(this).find("img").attr('src'));
            if($item.hasClass('selected')) {
                $item.find('img').attr("src", imgsrc.replace(".png", "s.png"));
            } else {
                $item.find('img').attr("src", imgsrc.replace("s.png", ".png"));
            }
        })
    });
</script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

<script src="/src/js/lib/pikaday.js"></script>
<script>
var picker = new Pikaday({ field: $('#datepicker')[0] });
</script>
</body>
</html>
