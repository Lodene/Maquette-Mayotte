@if ($message = Session::get('success'))
    @push('scripts')
        <script>
            $(function() {
                toastr.success("{{ $message }}", "Succès !", {
                    timeOut: "3000", closeButton: !0
                });
            });
        </script>
    @endpush
@endif
@if ($message = Session::get('info'))
    @push('scripts')
        <script>
            $(function() {
                toastr.info("{{ $message }}", "Information", {
                    timeOut: "10000", closeButton: !0
                });
            });
        </script>
    @endpush
@endif
@if ($message = Session::get('warning'))
    @push('scripts')
        <script>
            $(function() {
                toastr.warning("{{ $message }}", "Attention !", {
                    timeOut: "5000", closeButton: !0
                });
            });
        </script>
    @endpush
@endif
@if ($message = Session::get('error'))
    @push('scripts')
        <script>
            $(function() {
                toastr.error("{{ $message }}", "Erreur !", {
                    timeOut: "5000", closeButton: !0
                });
            });
        </script>
    @endpush
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        @push('scripts')
            <script>
                $(function() {
                    toastr.error("{{ $error }}", "Erreur !", {
                        timeOut: "5000", closeButton: !0
                    });
                });
            </script>
        @endpush
    @endforeach
@endif
