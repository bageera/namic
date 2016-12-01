<div id="headerBg"><div id="headerElements"></div></div>
<div id="navigation">
    <div id="headerLinks">
        <ul><li style="z-index:81;" class="first" id="nav_home"  >
                <a class="@if (Request::path() === '/') selected @endif" href="{{ URL::to('/') }}" target="_self"><span></span>Home</a></li>
            <li style="z-index:79;" id="nav_about-the-chapter"  >
                <a class="@if (Request::path() === 'chapter') selected @endif" href="{{ URL::to('chapter') }}" target="_self"><span></span>About the Chapter</a>
            </li>
            <li style="z-index:78;" id="nav_committee"  ><a class="@if (Request::path() === 'committee') selected @endif" href="{{ URL::to('committee') }}" target="_self"><span></span>Committees</a>
            </li>
            <li style="z-index:78;" id="nav_events"  ><a class="@if (Request::path() === 'events') selected @endif" href="{{ URL::to('events') }}" target="_self"><span></span>Events</a>
            </li>
            <li style="z-index:78;" id="nav_awards"  ><a class="@if (Request::path() === 'epic-awards') selected @endif" href="{{ URL::to('epic-awards') }}" target="_self"><span></span>Epic Awards</a>
            </li>
            <li style="z-index:77;" id="nav_unplugged"  ><a class="@if (Request::path() === 'unplugged') selected @endif" href="{{ URL::to('unplugged') }}" target="_self"><span></span>Unplugged</a>
            </li>
            <li style="z-index:76;" id="nav_membership"  ><a class="@if (Request::path() === 'membership') selected @endif" href="{{ URL::to('membership') }}" target="_self"><span></span>Membership</a>
            </li>
            <li style="z-index:75;" id="nav_scholarships"  ><a class="@if (Request::path() === 'scholarships') selected @endif" href="{{ URL::to('scholarships') }}" target="_self"><span></span>Scholarships</a>
            </li>
            <li style="z-index:74;" id="nav_event-photos"  ><a class="@if (Request::path() === 'photos') selected @endif" href="{{ URL::to('event-photos') }}" target="_self"><span></span>Event Photos</a>
            </li>
            <li style="z-index:74;" class="last" id="nav_contact"  ><a class="@if (Request::path() === 'contact') selected @endif" href="{{ URL::to('contact') }}" target="_self"><span></span>Contact US</a>
                    </li>
            <li style="z-index:74;" class="last" id="nav_volunteers"  ><a class="@if (Request::path() === 'volunteer') selected @endif" href="{{ URL::to('volunteer') }}" target="_self"><span></span>Brand Ambassadors</a>
            </li>

        </ul>

    </div>
    <div id="secondaryNav" onMouseOver="delaySecondaryNav()" onMouseOut="hideSecondaryNav()"></div>
</div>