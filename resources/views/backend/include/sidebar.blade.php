  <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar position-relative">
          <div class="multinav">
              <div class="multinav-scroll" style="height: 100%;">
                  <!-- sidebar menu-->
                  <ul class="sidebar-menu" data-widget="tree">
                      <li class="header">Dashboard & Apps</li>
                      <li class="treeview">
                          <a href="#">
                              <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Dashboard</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span
                                              class="path2"></span></i>Dashboard 1</a></li>
                          </ul>
                      </li>
                      <li class="header">Company Settings</li>
                      <li class="treeview">
                          <a href="#">
                              <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                              <span>Settings</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('admin.site-settings') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Company
                                      Information</a></li>
                              <li><a href="{{ route('admin.seo-settings') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>SEO Settings</a>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                              <span>Team</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('admin.team.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Team Create</a></li>
                              <li><a href="{{ route('admin.team.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Team List</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                              <span>Gallery</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('admin.gallery.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Gallery Create</a>
                              </li>
                              <li><a href="{{ route('admin.gallery.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Gallery List</a>
                              </li>

                              <li><a href="{{ route('admin.faqs.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>FAQ Create</a></li>
                              <li><a href="{{ route('admin.faqs.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>FAQ List</a></li>

                            <li><a href="{{ route('admin.blog.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Blog Create</a></li>
                              <li><a href="{{ route('admin.blog.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Blog List</a></li>
                                <li><a href="{{ route('admin.event.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Event Create</a></li>
                              <li><a href="{{ route('admin.event.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Event List</a></li>

                                     <li><a href="{{ route('admin.slider.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Slider Create</a></li>
                              <li><a href="{{ route('admin.slider.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Slider List</a></li>


                                
                                     <li><a href="{{ route('admin.testimonial.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Testimonial Create</a></li>
                              <li><a href="{{ route('admin.testimonial.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Testimonial List</a></li>
                                {{-- partner --}}
                                 <li><a href="{{ route('admin.partner.create') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Partner Create</a></li>
                              <li><a href="{{ route('admin.partner.index') }}"><i class="icon-Commit"><span
                                              class="path1"></span><span class="path2"></span></i>Partner List</a></li>


                                     <li><a href="{{ url('/admin/setting/mission') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Mission, Vision & Values</a></li>
                                    <li><a href="{{ url('/admin/setting/history') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>History</a></li>
                                    <li><a href="{{ url('/admin/setting/success') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Success</a></li> 
                                                                    
                                    <li><a href="{{ route('admin.setting.financial-aid') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Financial Aid</a></li>
                                    <li><a href="{{ route('admin.setting.eligibility-financial-aid') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Eligibility Financial Aid</a></li>
                                    <li><a href="{{ route('admin.setting.prerequisites') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Prerequisites</a></li>
                                    <li><a href="{{ route('admin.setting.application-support') }}"><i class="icon-Commit"><span  class="path1"></span><span class="path2"></span></i>Application Support</a></li>
                          
                                </ul>

                      </li>
                  </ul>
              </div>
          </div>
      </section>
      <div class="sidebar-footer">
          <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span
                  class="icon-Settings-2"></span></a>
          <a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span
                  class="icon-Mail"></span></a>
          <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span
                  class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
      </div>
  </aside>
