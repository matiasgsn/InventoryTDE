<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - All Items - Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="./style.css">
</head>

<body>

  <div class="app d-flex mx-auto" style="max-width: 1440px;">
    <!-- Sidebar -->
        <aside class="sidebar d-flex flex-column m-3 rounded-4" style="max-width: 232px;">
        </aside>
        
        <aside class="sidebar sidebar-bg d-flex flex-column m-3 rounded-4 position-fixed" style="max-width: 232px;">
        <div class="logo-section d-flex align-items-center justify-content-center mt-5 ms-3">
            <img src="../Sidebar/Logo.svg" alt="Inventory Logo" class="logo me-2">
            <h6 class="brand-title mb-0">Inventory</h6>
        </div>
        <nav class="nav flex-column mt-4 px-4">
            <a class="nav-link" href="../Dashboard/index.html">
            <img src="../Sidebar/Dashboard.svg" alt="Dashboard Icon" class="dark-500 me-3"> Dashboard
            </a>
            <a class="nav-link active" href="../All Items/index.html">
            <img src="../Sidebar/Items.svg" alt="Items Icon" class="dark-500 me-3"> Items
            </a>
            <a class="nav-link" href="#">
            <img src="../Sidebar/Tools.svg" alt="Tools Icon" class="dark-500 me-3"> Tools
            </a>
            <a class="nav-link" href="#">
            <img src="../Sidebar/Assets.svg" alt="Assets Icon" class="dark-500 me-3"> Assets
            </a>
            <a class="nav-link" href="#">
            <img src="../Sidebar/Project.svg" alt="Project Icon" class="dark-500 me-3"> Project
            </a>
            <a class="nav-link" href="#">
            <img src="../Sidebar/Requested & Returned.svg" alt="Requested & Returned Icon" class="dark-500 me-3"> Requested & Returned
            </a>
            <a class="nav-link" href="../On use/index.html">
            <img src="../Sidebar/On hand.svg" alt="On Hand Icon" class="dark-500 me-3"> On hand
            </a>
            <a class="nav-link" href="#">
            <img src="../Sidebar/GRN Report.svg" alt="GRN Report Icon" class="dark-500 me-3"> GRN Report
            </a>
        </nav>
        <div class="flex-grow-1"></div>
        <div class="theme-toggle d-flex justify-content-center align-items-center mb-4 px-3">
            <button class="btn body-1-regular white-500 theme-btn-light d-flex justify-content-around w-50 py-3">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1V2M11 20V21M18.0711 3.92894L17.364 4.63605M4.63605 17.364L3.92894 18.0711M21 11H20M2 11H1M18.071 18.0711L17.3639 17.364M4.63605 4.63605L3.92894 3.92894M17 11C17 14.3137 14.3137 17 11 17C7.68629 17 5 14.3137 5 11C5 7.68629 7.68629 5 11 5C14.3137 5 17 7.68629 17 11Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg> Light
            </button>
            <button class="btn body-1-regular dark-500 theme-btn-dark d-flex justify-content-around w-50 py-3">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.67163 12.8687C8.751 12.8687 12.8687 8.751 12.8687 3.67163C12.8687 2.74246 12.7309 1.84548 12.4746 1C16.251 2.14461 19 5.65276 19 9.80298C19 14.8824 14.8824 19 9.80298 19C5.65276 19 2.14461 16.251 1 12.4746C1.84548 12.7309 2.74246 12.8687 3.67163 12.8687Z" stroke="#16151C" stroke-width="1.5" stroke-linejoin="round"/>
            </svg> Dark
            </button>
        </div>
        </aside>

    <!-- Área principal -->
    <div class="content d-flex flex-column w-100">
      <!--Navbar-->
          <nav class="nav-content d-flex justify-content-between align-items-start p-4 mb-1 w-100">
              <div class="d-flex flex-column">
                  <!--Título da Navbar-->
                   <p class="nav-title header-6-bold dark-500 mb-0">All Items</p>
                   <!--Subtítulo da Navbar-->
                   <p class="nav-subtitle body-2-regular gray-500 mb-0">Items detail Information</p>
              </div>
              <!--Pesquisa, notificação e perfil-->
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center border rounded">
                      <img class="search-svg" src="../Navbar/search.svg" alt="">
                      <input type="text" class="search-input form-control border border-0 me-3 ms-2" placeholder="Search">
                    </div>
                      <button class="btn noti-btn">
                          <img src="../Navbar/notification.svg" alt="">
                      </button>
                      <div class="d-flex align-items-center border rounded"">
                        <div class="my-profile user-box d-flex flex-row align-items-center w-100 h-100 p-2">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="user-img rounded-2 me-2">
                            <div class="me-2">
                            <span class="fw-semibold">Mathias W.</span><br>
                            <small class="text-muted">Store Manager</small>
                            </div>
                            <button class="btn btn-sm ms-2">
                                <img src="../Navbar/down-arrow.svg" alt="">
                            </button>
                        </div>
                      </div>
                </div>
          </nav>

      <!--Conteúdo da página-->    
      <main class="main-content flex-fill p-4 w-100">
        <!--Conteúdo vai aqui-->

        <!--pesquisa, add e filtro de itens-->
        <div class="container border rounded p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center border rounded">
              <img class="search-svg" src="../Navbar/search.svg" alt="">
              <input type="text" class="search-input form-control border border-0 me-3 ms-2" placeholder="Search Items">
            </div>
            
            <div class="d-flex flex-row flex-nowrap align-items-center">
              <div class="package"><button class="btn" data-bs-toggle="modal" data-bs-target="#packageModal"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1661 3.1442L24.8327 6.22333C25.7932 6.66693 26.5833 7.38289 27.1342 8.26089L22.6833 10.4864L11.3879 4.27392L13.8339 3.1442C15.2129 2.50727 16.7871 2.50727 18.1661 3.1442ZM9.69612 5.05532L7.16726 6.22333C6.20682 6.66693 5.41666 7.38289 4.86578 8.26088L16 13.828L21.0529 11.3016L9.69612 5.05532ZM4.2448 9.62745C4.08492 10.1563 4 10.7152 4 11.2881V20.7116C4 22.9019 5.24125 24.8868 7.16726 25.7764L13.8339 28.8555C14.2894 29.0658 14.7661 29.2067 15.25 29.2781V15.13L4.2448 9.62745ZM16.75 29.2781C17.2339 29.2067 17.7106 29.0658 18.1661 28.8555L21.9167 27.1232V12.5467L16.75 15.13V29.2781ZM23.4167 26.4304L24.8327 25.7764C26.7588 24.8868 28 22.9019 28 20.7116V11.2881C28 10.7152 27.9151 10.1563 27.7552 9.62745L23.4167 11.7967V26.4304Z" fill="#006EC4"/>
                </svg></button>
                </div>
              <div>
                <button class="btn btn-primary me-2" data-bs-toggle="offcanvas" data-bs-target="#addItemCanvas">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8V16M16 12H8M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                     Add Item
                </button>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#filterModal">
                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.5 6H10.5" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.5 12H12.5" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.5 12H21.5" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.5 6L21.5 6" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.5 18H20.5" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.5 18H6.5" stroke="#16151C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="8.5" cy="18" r="2" stroke="#16151C" stroke-width="1.5"/>
                    <circle cx="17.5" cy="12" r="2" stroke="#16151C" stroke-width="1.5"/>
                    <circle cx="12.5" cy="6" r="2" stroke="#16151C" stroke-width="1.5"/>
                    </svg>
                     Filter
                </button>
              </div>
            </div>
          </div>




          <!--table-->
          <div class="justify-content-center align-items-center">
            <form class="d-flex justify-content-center p-5">
                <table class="table" style="max-width: 1236px;">
                    <thead class="table-body-small-bold thead-bg">
                      <tr class="table-header">
                        <th class="py-3 greyscale-600 text-start" style="max-width: 3%; border-radius: 1em 0 0 1em; padding-left: 1.5em;">
                            <input class="form-check-input checklist-disabled" type="checkbox" value="" id="checkDefault">
                        </th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 12%;">
                            <div class="d-flex flex-row justify-content-evenly align-items-center">
                                <span class="flex-fill">Item Name</span>
                                <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.46055 0.320327C3.75848 0.026688 4.24152 0.026688 4.53945 0.320327L7.27503 3.01651C7.75562 3.49019 7.41524 4.3001 6.73558 4.3001H1.26442C0.584758 4.3001 0.244379 3.49019 0.724976 3.01651L3.46055 0.320327Z" fill="#CBD5E0"/>
                                    <path d="M3.46055 9.67987C3.75848 9.97351 4.24152 9.97351 4.53945 9.67987L7.27503 6.98369C7.75562 6.51001 7.41524 5.7001 6.73558 5.7001H1.26442C0.584758 5.7001 0.244379 6.51001 0.724976 6.98369L3.46055 9.67987Z" fill="#CBD5E0"/>
                                    </svg>
                            </div>
                                
                        </th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 10%">Image</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 10%">Model</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 11%">Type</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 11%">Store</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 11%">Ammount</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 10%">Project</th>
                        <th class="py-3 greyscale-600 text-start" scope="col" style="max-width: 11%">Account</th>
                        <th class="py-3 greyscale-600 text-end" scope="col" style="max-width: 11%; border-radius: 0 1em 1em 0; padding-right: 1.5em;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-body-small-medium" style="border-color: transparent;">
                        <?php 
                          include "../Backend/config.php";
                          $sql = "SELECT * FROM items";
                          $query = $mysqli -> query($sql);
                          while($dados = $query -> fetch_array()){
                          ?><tr class="table-row">
                              <td class="py-3 align-middle greyscale-900" style="max-width: 3%; border-radius: 1em 0 0 1em; padding-left: 1.5em;">
                                  <input class="form-check-input checklist-disabled" type="checkbox" value="" id="checkDefault">
                              </td>
                              <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 12%;">
                                  <?php echo $dados['name']?>
                              </td>
                              <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 10%">
                                <img style="max-width: 57px; max-height: 57px;" src="<?php echo $dados['image']?>" alt="">
                              </td>
                              <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 10%"><?php echo $dados['model'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 11%"><?php echo $dados['type'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 11%"><?php echo $dados['store'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 11%"><?php echo $dados['amount'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 10%"><?php echo $dados['project'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-start" scope="col" style="max-width: 11%"><?php echo $dados['account'];?></td>
                            <td class="py-3 align-middle greyscale-900 text-end" scope="col" style="max-width: 11%; border-radius: 0 1em 1em 0; padding-left: 1.5em;">
                              <div class="d-flex flex-row justify-content-evenly">
                                <a class="btn btn-warning action-btn"><img class="Image-action" src="../Table/images/eye.svg" width="16px" height="16px"></a>
                                <a class="btn btn-primary action-btn"><img class="Image-action" src="../Table/images/edit.svg" width="16px" height="16px"></a>
                                <a href="../Backend/deletarItem.php?id=<?php echo $dados['id'];?>" class="btn btn-danger action-btn"><img class="Image-action" src="../Table/images/trash.svg" width="16px" height="16px"></a>
                              </div>
                            </td>
                            </tr><?php } ?>
                      </tbody>
                  </table>
            </form>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <div>
                  <div class="d-flex flex-row flex-nowrap align-items-center gap-4">
                      <span class="body-2-regular gray-500">Showing</span>
                      <select class="form-select w-auto">
                        <option selected>6</option>
                        <option>12</option>
                        <option>18</option>
                      </select>
                  </div>
                </div>
            </div>
            <div>
              Showing 1 to 10 out of 40 records
            </div>
            <nav>
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link">&lt;</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                  <a class="page-link">&gt;</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        </div>

        <!-- DEV: Modal de adicionar item -->
         <div class="modal fade" id="devAddModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Add item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="../Backend/salvarItem.php" method="post">
                <div class="modal-body">
                  <label for="add_name" class="form-label">Name</label>
                  <input type="text" name="add_name" required class="form-control" id="inputName">

                  <label for="add_image" class="form-label">Image (Link)</label>
                  <input type="text" name="add_image" required class="form-control" id="inputLink">

                  <label for="add_model" class="form-label">Model</label>
                  <input type="text" name="add_model" required class="form-control" id="inputModel">
                  
                  <label for="add_type" class="form-label">Type</label>
                  <input type="text" name="add_type" required class="form-control" id="inputType">

                  <label for="add_store" class="form-label">Store</label>
                  <input type="text" name="add_store" required class="form-control" id="inputStore">

                  <label for="add_amount" class="form-label">Ammount</label>
                  <input type="number" name="add_amount" required class="form-control" id="inputAmmount">

                  <label for="add_project" class="form-label">Project</label>
                  <select name="add_project" required class="form-control">
                    <option>HQ</option>
                  </select>

                  <label for="add_account" class="form-label">Account</label>
                  <select name="add_account" required class="form-control">
                    <option>Activated</option>
                  </select>

                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>

         <!-- Filter Modal -->
         <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Add item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Store</label>
                  <select class="form-select mb-2">
                    <option>Select store</option>
                  </select>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hq">
                    <label class="form-check-label" for="hq">HQ Main Store</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="house22">
                    <label class="form-check-label" for="house22">22 House Store</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tafo">
                    <label class="form-check-label" for="tafo">Tafo House Store</label>
                  </div>
                </div>
                <div>
                  <label class="form-label">Select store</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="storeType" id="office">
                    <label class="form-check-label" for="office">Office</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="storeType" id="home">
                    <label class="form-check-label" for="home">Work from Home</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Add Item Offcanvas -->
        <div class="offcanvas offcanvas-end custom-width" tabindex="-1" id="addItemCanvas">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add New Item</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <form>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="groupItem">
                <label class="form-check-label" for="groupItem">Group Item</label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="consumableItem">
                <label class="form-check-label" for="consumableItem">Consumable Item</label>
              </div>

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Type *</label>
                  <select class="form-select">
                    <option>Choose type</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Item Name *</label>
                  <input type="text" class="form-control" placeholder="Enter item name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Image *</label>
                  <input type="file" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Status *</label>
                  <select class="form-select">
                    <option>Choose Status</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Serial Number *</label>
                  <input type="text" class="form-control" placeholder="Enter serial number">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Item Number *</label>
                  <input type="text" class="form-control" placeholder="Enter item number">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Unit of Measurement *</label>
                  <select class="form-select">
                    <option>Choose unit of Measurement</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Amount *</label>
                  <input type="text" class="form-control" placeholder="Enter item number">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Price *</label>
                  <input type="text" class="form-control" placeholder="Enter price">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Date of Purchased *</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Currency *</label>
                  <select class="form-select">
                    <option>Choose Currency</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">P1 Document *</label>
                  <input type="file" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Store *</label>
                  <select class="form-select">
                    <option>Choose Store</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Project *</label>
                  <select class="form-select">
                    <option>Choose project</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Department *</label>
                  <select class="form-select">
                    <option>Choose department</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Category *</label>
                  <select class="form-select">
                    <option>Choose category</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Warranty *</label>
                  <input type="file" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Manufacturer *</label>
                  <select class="form-select">
                    <option>Choose manufacturer</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label">Description *</label>
                  <textarea class="form-control" placeholder="Input description" rows="3"></textarea>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="fixedAsset">
                    <label class="form-check-label" for="fixedAsset">Fixed Asset</label>
                  </div>
                </div>
              </div>

              <div class="mt-4 d-flex justify-content-center">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#devAddModal">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8V16M16 12H8M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                     [DEV] Add Item
                </button>
          </div>
        </div>


        <!-- Batch Request items -->
        <div class="modal fade" id="packageModal" tabindex="-1" aria-labelledby="packageModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content p-4 rounded-4">
              <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="packageModalLabel">Batch Request Items</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row g-3 align-items-end">
                  <div class="col-md-4">
                    <label class="form-label">Search <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Store <span class="text-danger">*</span></label>
                    <select class="form-select">
                      <option selected disabled>Store</option>
                      <option>Gypson/floor</option>
                      <option>HQ</option>
                      <option>Tafo</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Item category <span class="text-danger">*</span></label>
                    <select class="form-select">
                      <option selected disabled>Item group</option>
                      <option>Group A</option>
                      <option>Group B</option>
                    </select>
                  </div>
                </div>
        
                <div class="text-danger small mt-2">Please select store to proceed</div>
        
                <div class="mt-4">
                  <div class="d-flex justify-content-center flex-wrap gap-2">
                    <button class="btn btn-outline-primary rounded-pill">Gas kitting</button>
                    <button class="btn btn-outline-secondary rounded-pill">Condet</button>
                    <button class="btn btn-outline-secondary rounded-pill">Punta</button>
                    <button class="btn btn-outline-secondary rounded-pill">Wood punta 8mm</button>
                    <button class="btn btn-outline-primary rounded-pill">Gypson/floor</button>
                    <button class="btn btn-outline-secondary rounded-pill">Harry Potter</button>
                    <!-- Replicar butões para um layout maior -->
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-outline-secondary m-3" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary m-3">Add Item</button>
              </div>
            </div>
          </div>
        </div>

      </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>