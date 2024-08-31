<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<Script>
    // Script For Close alert

    var alert_del = document.querySelectorAll('.alert-del');
    alert_del.forEach((x) =>
        x.addEventListener('click', function() {
            x.parentElement.classList.add('hidden');
        })
    );
</Script>
