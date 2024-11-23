<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: var(--white);
        }

        .table-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .alert {
            display: none;
            /* Initially hidden */
        }

    </style>


</head>

<body>

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar custom-black navbar-dark">
            <a href="{{ route ('adminDashboard') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-success"><i class="fa fa-user-shield me-2"></i>ZakkSpace</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/ZakkSpaceLogo.png" alt="" style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-dark">ZakkSpace LMS</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{ route ('adminDashboard') }}" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                            class="fas fa-lock me-2"></i>Manage Lockers</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route ('admin.addLockers') }}" class="dropdown-item">Add Lockers</a>
                        <a href=".html" class="dropdown-item">View Lockers</a>
                        <a href=".html" class="dropdown-item">Assign Lockers</a>
                    </div>
                </div>
                <a href="{{ route ('overdues') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Overdues</a>
                <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Payment</a>
                <a href="{{ route ('transactions') }}" class="nav-item nav-link"><i
                        class="fa fa-table me-2"></i>Transaction</a>
                <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>New Feature</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand custom-white sticky-top px-4 py-0">
            <a href="" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-success mb-0"><i class="fas fa-user-shield"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars" style="color: var(--black);"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-white border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/ZakkSpaceLogo.png" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notification</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/ZakkSpaceLogo.png" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">ZakkSpace</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ route ('welcome') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--Navbar ends-->

        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                max-width: 950px;
                margin-top: 50px;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            .form-label {
                color: #343a40;
            }

            .form-control,
            .form-select {
                background-color: #f1f3f5;
                /* Light gray background */
                color: #495057;
                /* Darker text color */
                border: 1px solid #ccc;
                /* Lighter border */
            }

            .form-control:focus,
            .form-select:focus {
                background-color: #e9ecef;
                /* Slightly darker on focus */
                border-color: #28a745;
                /* Green border on focus */
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                /* Green box shadow on focus */
            }

            .btn-custom {
                background-color: #28a745;
                color: white;
                border: none;
            }

            .btn-custom:hover {
                background-color: #218838;
            }

            .form-title {
                color: #28a745;
                font-weight: bold;
                font-size: 24px;
                text-align: center;

            }

        </style>
        </head>

        <body>

            <!-- Locker Registration Form -->
            <div class="container">
                <h2 class="form-title">Locker Registration Form</h2>

                <!-- Locker Information Form -->
                <form id="lockerForm">
                    <!-- Locker Number and Status -->
                    <div class="mb-3">
                        <label for="lockerNumber" class="form-label">Locker Number</label>
                        <input type="text" class="form-control" id="lockerNumber" placeholder="Enter locker number"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" required>
                            <option value="vacant">Vacant</option>
                            <option value="occupied">Occupied</option>
                        </select>
                    </div>

                    <!-- Student Details -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Student First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                    </div>

                    <div class="mb-3">
                        <label for="middleName" class="form-label">Student Middle Name</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
                    </div>

                    <div class="mb-3">
                        <label for="lastName" class="form-label">Student Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                    </div>

                    <div class="mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="studentId" placeholder="Enter student ID">
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <input type="text" class="form-control" id="course" placeholder="Enter course">
                    </div>

                    <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" id="year" placeholder="Enter year">
                    </div>

                    <div class="mb-3">
                        <label for="set" class="form-label">Set</label>
                        <input type="text" class="form-control" id="set" placeholder="Enter set">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email address">
                    </div>

                    <button type="submit" class="btn btn-custom w-100">Submit</button>
                </form>
            </div>

            <div class="modal" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                            <b>Are you sure you want to delete this locker record?</b>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                            <button id="confirmDelete" type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Locker Table -->
            <div class="container mt-4">
                <!-- Table wrapped with .table-responsive for responsiveness -->
                <div class="table-responsive">
                    <table class="table table-bordered text-dark fw-bold">
                        <thead>
                            <tr>
                                <th>Locker ID</th>
                                <th>Locker Number</th>
                                <th>Status</th>
                                <th>Student Last Name</th>
                                <th>Student First Name</th>
                                <th>Student Middle Name</th>
                                <th>Student ID</th>
                                <th>Course</th>
                                <th>Year</th>
                                <th>Set</th>
                                <th>Email Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="lockerTableBody">
                            <!-- Locker rows will be added here dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>


            <script>
                let lockers = [];
                let lockerId = 100;
                let editingLockerId = null;
                let deletingLockerId = null;

                // Form submit listener
                document.getElementById('lockerForm').addEventListener('submit', function (event) {
                    event.preventDefault();

                    // Collect form data
                    const lockerNumber = document.getElementById('lockerNumber').value;
                    const lockerStatus = document.getElementById('status').value;
                    const studentLastName = document.getElementById('lastName').value;
                    const studentFirstName = document.getElementById('firstName').value;
                    const studentMiddleName = document.getElementById('middleName').value;
                    const studentId = document.getElementById('studentId').value;
                    const course = document.getElementById('course').value;
                    const year = document.getElementById('year').value;
                    const set = document.getElementById('set').value;
                    const email = document.getElementById('email').value;

                    // Check for duplicate locker number
                    if (lockers.some(locker => locker.number === lockerNumber && locker.id !==
                            editingLockerId)) {
                        alert("Locker number must be unique.");
                        return;
                    }

                    if (editingLockerId) {
                        // Update existing locker
                        updateLocker(editingLockerId, lockerNumber, lockerStatus, studentLastName,
                            studentFirstName, studentMiddleName, studentId, course, year, set, email);
                    } else {
                        // Add new locker
                        addLocker(lockerNumber, lockerStatus, studentLastName, studentFirstName,
                            studentMiddleName, studentId, course, year, set, email);
                    }

                    // Reset form and clear editing state
                    this.reset();
                    editingLockerId = null;
                });

                // Add locker
                function addLocker(number, status, studentLastName, studentFirstName, studentMiddleName, studentId,
                    course, year, set, email) {
                    lockers.push({
                        id: lockerId++,
                        number,
                        status,
                        studentLastName,
                        studentFirstName,
                        studentMiddleName,
                        studentId,
                        course,
                        year,
                        set,
                        email
                    });
                    renderLockers();
                }

                // Render lockers in table
                function renderLockers() {
                    const tbody = document.getElementById('lockerTableBody');
                    tbody.innerHTML = '';

                    lockers.forEach(locker => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>${locker.id}</td>
                    <td>${locker.number}</td>
                    <td>${locker.status}</td>
                    <td>${locker.studentLastName}</td>
                    <td>${locker.studentFirstName}</td>
                    <td>${locker.studentMiddleName}</td>
                    <td>${locker.studentId}</td>
                    <td>${locker.course}</td>
                    <td>${locker.year}</td>
                    <td>${locker.set}</td>
                    <td>${locker.email}</td>
                    <td class="table-actions">
                        <button class="btn btn-sm btn-info" onclick="editLocker(${locker.id})">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteLocker(${locker.id})">Delete</button>
                    </td>`;
                        tbody.appendChild(row);
                    });
                }

                // Edit locker
                function editLocker(id) {
                    const locker = lockers.find(locker => locker.id === id);
                    if (!locker) return;

                    document.getElementById('lockerNumber').value = locker.number;
                    document.getElementById('status').value = locker.status;
                    document.getElementById('firstName').value = locker.studentFirstName;
                    document.getElementById('middleName').value = locker.studentMiddleName;
                    document.getElementById('lastName').value = locker.studentLastName;
                    document.getElementById('studentId').value = locker.studentId;
                    document.getElementById('course').value = locker.course;
                    document.getElementById('year').value = locker.year;
                    document.getElementById('set').value = locker.set;
                    document.getElementById('email').value = locker.email;

                    editingLockerId = locker.id;
                }

                function updateLocker(id, number, status, studentLastName, studentFirstName, studentMiddleName,
                    studentId, course, year, set, email) {
                    const locker = lockers.find(locker => locker.id === id);
                    if (!locker) return;

                    locker.number = number;
                    locker.status = status;
                    locker.studentFirstName = studentFirstName;
                    locker.studentMiddleName = studentMiddleName;
                    locker.studentLastName = studentLastName;
                    locker.studentId = studentId;
                    locker.course = course;
                    locker.year = year;
                    locker.set = set;
                    locker.email = email;

                    renderLockers();

                }

                // Delete locker
                function deleteLocker(id) {
                    deletingLockerId = id;
                    // Show the confirmation modal
                    var myModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                    myModal.show();
                }
                document.getElementById('confirmDelete').addEventListener('click', function () {
                    // Remove locker with the given ID
                    lockers = lockers.filter(locker => locker.id !== deletingLockerId);

                    // Re-render the table
                    renderLockers();

                    // Close the modal
                    const myModal = bootstrap.Modal.getInstance(document.getElementById('confirmationModal'));
                    myModal.hide();
                });

                function showError(message) {
                    const errorAlert = document.getElementById('errorAlert');
                    errorAlert.textContent = message;
                    errorAlert.style.display = 'block'; // Show the alert
                }

                function hideError() {
                    const errorAlert = document.getElementById('errorAlert');
                    errorAlert.style.display = 'none'; // Hide the alert
                }

            </script>

            <a href="#" class="btn btn-lg btn-success    btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
<!-- Navbar End -->
