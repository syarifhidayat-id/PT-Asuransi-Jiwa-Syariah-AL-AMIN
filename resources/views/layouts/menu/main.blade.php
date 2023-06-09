@if (count($menu->childs) > 0)
    <div data-kt-menu-trigger="click" class="menu-item {{ (Request::is($menu->wmn_url) or Request::is($menu->wmn_url_o)) ? 'here show' : '' }} menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="{{ $menu->wmn_icon }}"></i>
                </span>
            </span>
            <span class="menu-title">{{ $menu->wmn_descp }}</span>
            <span class="menu-arrow"></span>
        </span>
        @foreach ($menu->childs as $child)
            <div class="menu-sub menu-sub-accordion {{ (Request::is($child->wmn_url) or Request::is($child->wmn_url_o)) ? 'menu-active-bg' : '' }}">
                @if (count($child->childs) > 0)
                    <div data-kt-menu-trigger="click" class="menu-item {{ (Request::is($child->wmn_url) or Request::is($child->wmn_url_o)) ? 'here show' : '' }} menu-accordion">
                        <span class="menu-link">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">{{ $child->wmn_descp }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @foreach ($child->childs as $child2)
                            <div class="menu-sub menu-sub-accordion {{ (Request::is($child2->wmn_url) or Request::is($child2->wmn_url_o)) ? 'menu-active-bg' : '' }}">
                                @if (count($child2->childs) > 0)
                                    <div data-kt-menu-trigger="click" class="menu-item {{ (Request::is($child2->wmn_url) or Request::is($child2->wmn_url_o)) ? 'here show' : '' }} menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ $child2->wmn_descp }}</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        @foreach ($child2->childs as $child3)
                                            <div class="menu-sub menu-sub-accordion {{ (Request::is($child3->wmn_url) or Request::is($child3->wmn_url_o)) ? 'menu-active-bg' : '' }}">
                                                @if (count($child3->childs) > 0)
                                                    <div data-kt-menu-trigger="click" class="menu-item {{ (Request::is($child3->wmn_url) or Request::is($child3->wmn_url_o)) ? 'here show' : '' }} menu-accordion">
                                                        <span class="menu-link">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">{{ $child3->wmn_descp }}</span>
                                                            <span class="menu-arrow"></span>
                                                        </span>
                                                        @foreach ($child3->childs as $child4)
                                                            <div class="menu-sub menu-sub-accordion {{ (Request::is($child4->wmn_url) or Request::is($child4->wmn_url_o)) ? 'menu-active-bg' : '' }}">
                                                                <div class="menu-item">
                                                                    <a class="menu-link {{ (Request::is($child4->wmn_url) or Request::is($child4->wmn_url_o)) ? 'active' : '' }}" href="
                                                                        @if ($child4->wmn_url === "maintenance" || $child4->wmn_url === "")
                                                                            #
                                                                        @else
                                                                        {{ route($child4->wmn_url) }}
                                                                        @endif">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">{{ $child4->wmn_descp }}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="menu-item">
                                                        <a class="menu-link {{ (Request::is($child3->wmn_url) or Request::is($child3->wmn_url_o)) ? 'active' : '' }}" href="
                                                            @if ($child3->wmn_url === "maintenance" || $child3->wmn_url === "")
                                                                #
                                                            @else
                                                            {{ route($child3->wmn_url) }}
                                                            @endif">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">{{ $child3->wmn_descp }}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="menu-item">
                                        <a class="menu-link {{ (Request::is($child2->wmn_url) or Request::is($child2->wmn_url_o)) ? 'active' : '' }}" href="
                                            @if ($child2->wmn_url === "maintenance" || $child2->wmn_url === "")
                                                #
                                            @else
                                            {{ route($child2->wmn_url) }}
                                            @endif">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">{{ $child2->wmn_descp }}</span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="menu-item">
                        <a class="menu-link {{ (Request::is($child->wmn_url) or Request::is($child->wmn_url_o)) ? 'active' : '' }}" href="
                            @if ($child->wmn_url === "maintenance" || $child->wmn_url === "")
                                #
                            @else
                            {{ route($child->wmn_url) }}
                            @endif">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">{{ $child->wmn_descp }}</span>
                        </a>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@else
    <div class="menu-item">
        <a class="menu-link {{ (Request::is($menu->wmn_url) or Request::is($menu->wmn_url_o)) ? 'active' : '' }}" href="
            @if ($menu->wmn_url === "maintenance" || $menu->wmn_url === "")
                #
            @else
            {{ route($menu->wmn_url) }}
            @endif
            ">
            <span class="menu-icon">
                <i class="{{ $menu->wmn_icon }}"></i>
            </span>
            <span class="menu-title">{{ $menu->wmn_descp }}</span>
        </a>
    </div>
@endif
