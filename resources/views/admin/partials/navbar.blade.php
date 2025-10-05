  <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
              placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                  <i class="fe fe-sun fe-16"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                  <span class="fe fe-grid fe-16"></span>
              </a>
          </li>
          <li class="nav-item nav-notif">
              <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                  <span class="fe fe-bell fe-16"></span>
                  <span class="dot dot-md text-success mr-2">12</span>
              </a>
          </li>

          <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog"
              aria-labelledby="defaultModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="defaultModalLabel">الإشعارات</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      {{-- الاشعارات اكمل --}}

                      <div class="modal-body">
                          <div class="list-group list-group-flush my-n3">

                              @auth('web')
                                  @forelse (auth()->user()->notifications as $notification)
                                      <div
                                          class="list-group-item bg-transparent {{ $notification->read_at ? '' : 'border-start border-3 border-primary' }}">
                                          <div class="row align-items-center">
                                              <div class="col-auto">
                                                  <span class="fe {{ $notification->read_at ? 'fe-mail' : 'fe-bell' }} fe-24"></span>
                                              </div>
                                              <div class="col">
                                                  <small><strong>{{ $notification->data['name'] ?? 'username' }}</strong></small>
                                                  <div class="my-0 text-muted small">
                                                      {{  ($notification->data['subject'] ?? '') }}
                                                  </div>
                                                  <div class="my-0 text-muted small">
                                                      {{ $notification->data['message'] ?? ($notification->data['subject'] ?? '') }}
                                                  </div>
                                                  <small class="badge badge-pill badge-light text-muted">
                                                      {{ $notification->created_at->diffForHumans() }}
                                                  </small>
                                              </div>
                                          </div>
                                      </div>
                                  @empty
                                      <div class="list-group-item bg-transparent text-muted small text-center">لا توجد
                                          إشعارات</div>
                                  @endforelse
                              @else
                                  <div class="list-group-item bg-transparent text-muted small text-center">الرجاء تسجيل
                                      الدخول</div>
                              @endauth

                          </div> <!-- / .list-group -->
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear
                              All</button>
                      </div>
                  </div>
              </div>
          </div>

          <li class="nav-item dropdown ml-3">
              <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm mt-2">
                      <img src="{{ asset('admin/assets/avatars/face-1.jpg') }}" alt="..."
                          class="avatar-img rounded-circle">
                  </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activities</a>
              </div>
          </li>
      </ul>
  </nav>
