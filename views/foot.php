<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="plugins/modal/popModal.js"></script>

<script>
    $('#dialogModal_ex1').click(function(){
    $('.dialog_content').dialogModal({
        topOffset: 0,
        onOkBut: function() {},
        onCancelBut: function() {},
        onLoad: function(el, current) {},
        onClose: function() {},
        onChange: function(el, current) {
            if(current == 3){
                el.find('.dialogModal_header span').text('Page 3');
                $.ajax({url:'ajax.html'}).done(function(content){
                    el.find('.dialogModal_content').html(content);
                });
            }
        }
    });
});
</script>