<!-- ================== BEGIN BASE JS ================== -->
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/theme/apple.min.js"></script>
<!-- ================== END BASE JS ================== -->
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>
@stack('scripts')