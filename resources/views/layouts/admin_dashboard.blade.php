<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('dashboard_assets/img/favicon.png')}}">
  <title>
    Control panel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('dashboard_assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show rtl bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset('dashboard_assets/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="me-1 font-weight-bold text-white">YASMEEN</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.dashboard')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-home "></i>
            </div>
            <span class="nav-link-text me-1">الرئيسية</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.users.index')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-users"></i>
            </div>
            <span class="nav-link-text me-1">المستخدمين</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.categories.index')}}">
              <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-cubes"></i>
              </div>
              <span class="nav-link-text me-1">الأصناف</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('admin.products.index')}}">
              <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-pizza-slice"></i>
              </div>
              <span class="nav-link-text me-1">المنتجات</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('admin.orders.index')}}">
              <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-receipt"></i>
              </div>
              <span class="nav-link-text me-1">الطلبات</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.models.index')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-info"></i>

            </div>
            <span class="nav-link-text me-1"> الموديل</span>
          </a>
        </li>

     
        <li class="nav-item">
          <a class="nav-link " href="{{asset('dashboard_assets/../pages/profile.html')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-user"></i>
            </div>
            <span class="nav-link-text me-1">ملفي الشخصي</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{asset('dashboard_assets/../pages/sign-in.html')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <span class="nav-link-text me-1">تسجيل الخروج</span>
          </a>
        </li>
        
      </ul>
    </div>
  
  </aside>
        @yield('content')
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-end">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
               
              </div>
            </div>
         
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a  href="{{route('admin.cart.get_content')}}"   class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        
        <i class="fas fa-shopping-cart py-2"></i>
        
    </a>
    
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('dashboard_assets/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('dashboard_assets/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboard_assets/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('dashboard_assets/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('dashboard_assets/assets/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('dashboard_assets/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>