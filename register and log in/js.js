$(document).ready(function () {
    $('.dell').click(function () {
            let sendVar = $(this).attr('data-name');
            alert(sendVar);

            $.ajax({
                type: "POST",
                url: 'logged_in.php',
                data: {sendVar : sendVar}
            });
    });
});