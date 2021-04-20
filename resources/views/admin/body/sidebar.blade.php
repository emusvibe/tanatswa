 <!-- ########## START: LEFT PANEL ########## -->
 <div class="sl-logo" style="background-color: white;"  ><img src="{{asset('/images/tanatswa-logo.png')}}" style="width: 150px;"/></div>
 <div class="sl-sideleft">
   

   <label class="sidebar-label"></label>
   <div class="sl-sideleft-menu">
     <a href="{{url('/admin/dashboard')}}" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
         <span class="menu-item-label">Dashboard</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->

     <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <span class="menu-item-label">Security</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{route('entry.log')}}" class="nav-link">Entrance</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Duty Roster</a></li> 
    </ul>     
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <span class="menu-item-label">Management</span></span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{route('employees')}}" class="nav-link">Employees</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Salaries</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Users</a></li>      
    </ul>

    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <span class="menu-item-label">Transport</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="#" class="nav-link">Vehicles</a></li>      
    </ul>

    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <span class="menu-item-label">Sales</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="#" class="nav-link">Customers</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Suppliers</a></li>
      <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Products</a></li>
      <li class="nav-item"><a href="#" class="nav-link">POS</a></li>  
      <li class="nav-item"><a href="{{route('receiving.log')}}" class="nav-link">Receiving</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Dispatch</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Orders</a></li>   
    </ul>

     
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

        </div><!-- sl-sideleft-menu -->

   <br>
 </div><!-- sl-sideleft -->
 <!-- ########## END: LEFT PANEL ########## -->