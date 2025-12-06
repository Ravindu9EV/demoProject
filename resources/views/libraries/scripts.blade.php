<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- bootstrap script  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
{{-- confirmjs script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>


@stack('scripts')

<script>
    function deleteConfirm(url,type){
        $.confirm({
    title: 'Confirm!',
    content: 'Are you sure you want to delete the '+type+'? ',
    buttons: {
        confirm: function () {
            window.location.href=url;
        },
        cancel: function () {
            $.alert('Canceled!');
        },

    }
});

    }
</script>

<script>
    function editConfirm(type){
            $.confirm({
        title: 'Confirm!',
        content: 'Are you sure you want to Edit the '+type+'? ',
        buttons: {
            confirm: function () {

               document.getElementById('updateForm').submit();
            },
            cancel: function () {
                $.alert('Canceled!');
            },

        }
    });

    }
</script>
