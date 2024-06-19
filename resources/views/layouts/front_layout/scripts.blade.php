<!-- JavaScript Libraries -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"> </script>
<script src="{{ asset('lib/wow/wow.min.js') }}"> </script>
<script src="{{ asset('lib/easing/easing.min.js') }}"> </script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"> </script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"> </script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"> </script>



<script>
$(document).ready(function() {
    $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        // Get the previously active tab
        var previousTab = $(e.relatedTarget).attr('href');

        // Find the iframe within the previous tab and pause the video
        var $previousIframe = $(previousTab).find('iframe');
        if ($previousIframe.length) {
            var src = $previousIframe.attr('src');
            $previousIframe.attr('src', ''); // Clear the src attribute to stop the video
            $previousIframe.attr('src', src); // Reset the src attribute
        }
    });
});
</script>