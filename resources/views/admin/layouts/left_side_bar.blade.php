<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
             <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub {{ (
                        
                        Route::is('add-category') ||
                        Route::is('category-list') ||
                        Route::is('add-child-category') ||
                        Route::is('child-category-list') ||
                        Route::is('add-sub-category') ||
                        Route::is('sub-category-list') 
                        ) ? ' open active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Category Management</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ ((Route::is('add-category') || Route::is('category-list') || Route::is('edit_menu_category') ) ? 'active' : '') }}">
                                <a href="{{ route('category-list') }}">
                                    <span class="site-menu-title">Category</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ ((Route::is('add-child-category') || Route::is('child-category-list') ) ? 'active' : '') }}">
                                <a href="{{ route('child-category-list') }}">
                                    <span class="site-menu-title">Child Category</span>
                                </a>
                            </li>

                            <li class="site-menu-item {{ ((Route::is('add-sub-category') || Route::is('sub-category-list') ) ? 'active' : '') }}">
                                <a href="{{ route('sub-category-list') }}">
                                    <span class="site-menu-title">Sub Category</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="site-menu-item has-sub {{ (
                        
                        Route::is('add-test') ||
                        Route::is('add-lab') ||
                        Route::is('test-list') || 
                        Route::is('lab-list') 
                        ) ? ' open active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Test Management</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Route::is('add-lab') ||  Route::is('lab-list') ? 'active' : '' }}">
                                <a href="{{ route('lab-list') }}">
                                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                    <span class="site-menu-title">Lab Details</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ ((Route::is('add-test') || Route::is('test-list') ) ? 'active' : '') }}">
                                <a href="{{ route('test-list') }}">
                                    <span class="site-menu-title">Test  Details</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    
                    <li class="site-menu-item {{ Route::is('search') ? 'active' : '' }}">
                        <a href="{{ route('search') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Search Test</span>
                        </a>
                    </li>

                    <li class="site-menu-item has-sub {{ (
                        
                       
                        Route::is('book-test-list') ||
                        Route::is('book-test-accepted-list') ||
                        Route::is('book-test-rejected-list')
                        ) ? ' open active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Booking Management</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Route::is('book-test-list') ||  Route::is('book-test-list') ? 'active' : '' }}">
                                <a href="{{ route('book-test-list') }}">
                                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                    <span class="site-menu-title">Booking Test Request</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ ((Route::is('book-test-accepted-list') || Route::is('book-test-accepted-list') ) ? 'active' : '') }}">
                                <a href="{{ route('book-test-accepted-list') }}">
                                    <span class="site-menu-title">Test  Accepted</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ ((Route::is('book-test-rejected-list') || Route::is('book-test-rejected-list') ) ? 'active' : '') }}">
                                <a href="{{ route('book-test-rejected-list') }}">
                                    <span class="site-menu-title">Test  Rejected</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

                {{-- 
                    @if(Auth::user()->user_type=='admin')

                    <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item Hash {{ (Route::is('onboard_restaurant') ||
                    Route::is('edit_onboard_restaurant') ||
                    Route::is('restaurants_with_kyc_pending') ||
                    Route::is('restaurants_with_kyc_completed') ||
                    Route::is('list_menu_products') ||
                    Route::is('add_menu_products') ||
                     Route::is('restaurant_details') ) ? 'active' : '' }}">
                        <a href="{{ route('restaurants_with_kyc_pending') }}">
                            <i class="site-menu-icon fa fa-building" aria-hidden="true"></i>
                            <span class="site-menu-title">Restaurants</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ ((Route::is('cuisines') || Route::is('add_cuisine') || Route::is('edit_cuisine') ) ? 'active' : '') }}">
                        <a href="{{ route('cuisines') }}">
                            <i class="site-menu-icon fa fa-cutlery" aria-hidden="true"></i>
                            <span class="site-menu-title">Cuisines</span>
                        </a>
                    </li>

                    <li class="site-menu-item has-sub {{ (
                    Route::is('menu') ||
                    Route::is('menu_categories') ||
                    Route::is('add_menu_category') ||
                    Route::is('edit_menu_category') ||
                    Route::is('product_categories') ||
                    Route::is('add_product_category') ||
                    Route::is('edit_product_category')
                    ) ? ' open active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Menu</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ ((Route::is('menu_categories') || Route::is('add_menu_category') || Route::is('edit_menu_category') ) ? 'active' : '') }}">
                                <a href="{{ route('menu_categories') }}">
                                    <span class="site-menu-title">Menu Category</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Menu</span>
                                </a>
                            </li>

                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Menu Product</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Modifiers</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ ((Route::is('product_categories') || Route::is('add_product_category') || Route::is('edit_product_category') ) ? 'active' : '') }}">
                                <a href="{{ route('product_categories') }}">
                                    <span class="site-menu-title">Product Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="site-menu-item {{ ((Route::is('brands') || Route::is('add_brand') || Route::is('edit_brand') ) ? 'active' : '') }}">
                        <a href="{{ route('brands') }}">
                            <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                            <span class="site-menu-title">Brands</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ ((Route::is('allergens') || Route::is('add_allergen') || Route::is('edit_allergen') ) ? 'active' : '') }}">
                        <a href="{{ route('allergens') }}">
                            <i class="site-menu-icon wb-heart" aria-hidden="true"></i>
                            <span class="site-menu-title">Allergens</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ ((Route::is('galleries') || Route::is('add_gallery') || Route::is('edit_gallery') ) ? 'active' : '') }}">
                        <a href="{{ route('galleries') }}">
                            <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                            <span class="site-menu-title">Gallery</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub {{ Route::is('reports') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Reports</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Restaurants</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Customers</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Orders</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item {{ Route::is('wallet_summary') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Wallet Summary</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ Route::is('wallet_summary') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">Financial</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ Route::is('wallet_summary') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-copy" aria-hidden="true"></i>
                            <span class="site-menu-title">CMS</span>
                        </a>
                    </li>

                    </ul>
                    <div class="site-menubar-section">
                        <h5>
                            Open Restaurants
                            <span class="float-right">30%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                        </div>
                    </div>

                @elseif(Auth::user()->user_type=='restaurant')

                    <ul class="site-menu" data-plugin="menu">

                        <li class="site-menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                                <div class="site-menu-badge">
                                    <span class="badge badge-pill badge-success">3</span>
                                </div>
                            </a>
                        </li>
                        <li class="site-menu-item {{ Route::is('cuisines') ? 'active' : '' }}">
                            <a href="{{ route('cuisines') }}">
                                <i class="site-menu-icon fa fa-cutlery" aria-hidden="true"></i>
                                <span class="site-menu-title">Cuisines</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub {{ (
                            Route::is('menu') ||
                            Route::is('menu_categories') ||
                            Route::is('add_menu_category') ||
                            Route::is('edit_menu_category') ||
                            Route::is('product_categories') ||
                            Route::is('add_product_category') ||
                            Route::is('edit_product_category')
                            ) ? ' open active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                                <span class="site-menu-title">Menu</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item {{ ((Route::is('menu_categories') || Route::is('add_menu_category') || Route::is('edit_menu_category') ) ? 'active' : '') }}">
                                    <a href="{{ route('menu_categories') }}">
                                        <span class="site-menu-title">Menu Category</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Menu</span>
                                    </a>
                                </li>

                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Menu Product</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Modifiers</span>
                                    </a>
                                </li>
                                <li class="site-menu-item {{ ((Route::is('product_categories') || Route::is('add_product_category') || Route::is('edit_product_category') ) ? 'active' : '') }}">
                                    <a href="{{ route('product_categories') }}">
                                        <span class="site-menu-title">Product Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="site-menu-item {{ ((Route::is('brands') || Route::is('add_brand') || Route::is('edit_brand') ) ? 'active' : '') }}">
                            <a href="{{ route('brands') }}">
                                <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                                <span class="site-menu-title">Brands</span>
                            </a>
                        </li>
                        <li class="site-menu-item {{ ((Route::is('allergens') || Route::is('add_allergen') || Route::is('edit_allergen') ) ? 'active' : '') }}">
                            <a href="{{ route('allergens') }}">
                                <i class="site-menu-icon wb-heart" aria-hidden="true"></i>
                                <span class="site-menu-title">Allergens</span>
                            </a>
                        </li>
                        <li class="site-menu-item {{ ((Route::is('galleries') || Route::is('add_gallery') || Route::is('edit_gallery') ) ? 'active' : '') }}">
                            <a href="{{ route('galleries') }}">
                                <i class="site-menu-icon wb-image" aria-hidden="true"></i>
                                <span class="site-menu-title">Gallery</span>
                            </a>
                        </li>

                        <li class="site-menu-item has-sub {{ Route::is('reports') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                                <span class="site-menu-title">Reports</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Restaurants</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Customers</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Orders</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item {{ Route::is('delivery_area_and_timings') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-truck" aria-hidden="true"></i>
                                <span class="site-menu-title">Delivery Area & Timings</span>
                            </a>
                        </li>
                        <li class="site-menu-item {{ Route::is('rating_and_reviews') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-star" aria-hidden="true"></i>
                                <span class="site-menu-title">Reviews & Ratings</span>
                            </a>
                        </li>
                        <li class="site-menu-item {{ Route::is('discount_and_offers') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-gift" aria-hidden="true"></i>
                                <span class="site-menu-title">Discount & Offers</span>
                            </a>
                        </li>
                        <li class="site-menu-item {{ Route::is('wallet_summary') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-google-wallet" aria-hidden="true"></i>
                                <span class="site-menu-title">Wallet Summary</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub {{ Route::is('rolesandpermisson') ? 'active' : '' }}">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-universal-access" aria-hidden="true"></i>
                                <span class="site-menu-title">Roles & Permission</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Roles</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Permission</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                @endif --}}
            </div> 
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Logout"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <span class="icon wb-power" aria-hidden="true"></span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </a>
    </div>
</div>