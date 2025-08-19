<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EPBOX ENGINEERING - Admin Dashboard')</title>
    <!-- Linking the CSS files -->
    <link href="{{ asset('vendor/fontawesome-free/css/svg-with-js.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.topbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJ+Y3VQvFjae2B8FKq4CkHBXQ4Z3nUPZK0s8Q=" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script defer src="{{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
    <script>
        // Small helper CSS: when sidebar hidden on mobile, remove left space
        (function() {
            var css = '.sidebar-hidden-mobile #content-wrapper{margin-left:0 !important;}';
            var style = document.createElement('style');
            style.type = 'text/css';
            style.appendChild(document.createTextNode(css));
            document.head.appendChild(style);
        })();
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile sidebar toggle (topbar burger button)
            (function() {
                var toggleBtn = document.getElementById('sidebarToggleTop');
                var toggleBtnDesktop = document.getElementById('sidebarToggle');
                var sidebarEl = document.getElementById('accordionSidebar');
                var wrapperEl = document.getElementById('wrapper');
                function hideSidebar() {
                    if (!sidebarEl) return;
                    sidebarEl.classList.add('d-none');
                    if (wrapperEl) wrapperEl.classList.add('sidebar-hidden-mobile');
                }
                function showSidebar() {
                    if (!sidebarEl) return;
                    sidebarEl.classList.remove('d-none');
                    if (wrapperEl) wrapperEl.classList.remove('sidebar-hidden-mobile');
                }

                if (toggleBtn && sidebarEl) {
                    toggleBtn.addEventListener('click', function() {
                        // Toggle visibility by utility class on mobile
                        if (window.innerWidth < 992) {
                            if (sidebarEl.classList.contains('d-none')) { showSidebar(); } else { hideSidebar(); }
                        }
                    });

                    // On resize back to desktop, always show sidebar
                    window.addEventListener('resize', function() {
                        if (window.innerWidth >= 992) {
                            showSidebar();
                        }
                    });
                }

                // Desktop toggle to collapse/expand as well
                if (toggleBtnDesktop && sidebarEl) {
                    toggleBtnDesktop.addEventListener('click', function() {
                        if (sidebarEl.classList.contains('d-none')) { showSidebar(); } else { hideSidebar(); }
                    });
                }
            })();
            // Enable Bootstrap tooltips
            if (window.$ && $.fn.tooltip) {
                $('[data-toggle="tooltip"]').tooltip();
            }

            // Ensure Bootstrap dropdowns are initialized (for user avatar dropdown)
            if (window.$ && $.fn.dropdown) {
                $('.dropdown-toggle').dropdown();
            }

            // Delete confirmation modal
            const modalId = 'confirmDeleteModal';
            if (!document.getElementById(modalId)) {
                const modalHtml = `
                <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure you want to delete this item?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="btnConfirmDelete">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>`;
                document.body.insertAdjacentHTML('beforeend', modalHtml);
            }

            let targetFormId = null;
            document.body.addEventListener('click', function(e) {
                const btn = e.target.closest('.btn-open-delete-modal');
                if (btn && btn.dataset.formId) {
                    targetFormId = btn.dataset.formId;
                    if (window.$ && typeof $('#' + modalId).modal === 'function') {
                        $('#' + modalId).modal('show');
                    } else {
                        // Fallback native confirm when jQuery/Bootstrap modal is unavailable
                        const ok = window.confirm('Are you sure you want to delete this item?');
                        if (ok) {
                            const form = document.getElementById(targetFormId);
                            if (form) form.submit();
                            targetFormId = null;
                        }
                    }
                }
            });

            document.addEventListener('click', function(e) {
                if (e.target && e.target.id === 'btnConfirmDelete') {
                    if (targetFormId) {
                        const form = document.getElementById(targetFormId);
                        if (form) form.submit();
                        targetFormId = null;
                        $('#' + modalId).modal('hide');
                    }
                }
            });
        });
    </script>
    @stack('scripts')
</body>

</html>