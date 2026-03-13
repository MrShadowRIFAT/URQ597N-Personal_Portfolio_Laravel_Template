<li class="dropdown"><a href="#">Home</a>
    <ul>
        <li><a href="{{ route('home') }}">Home One</a></li>
        <li><a href="{{ route('indexTwo') }}">Home Two</a></li>
    </ul>
</li>
<li><a href="{{ route('about') }}">about</a></li>
<li><a href="{{ route('services') }}">services</a></li>
<li class="dropdown"><a href="#">projects</a>
    <ul>
        <li><a href="{{ route('projects') }}">project Grid</a></li>
        <li><a href="{{ route('projectsMasonry') }}">projects masonry</a></li>
        <li><a href="{{ route('projectDetails') }}">projects details</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">blog</a>
    <ul>
        <li><a href="{{ route('blog') }}">blog standard</a></li>
        <li><a href="{{ route('blogDetails') }}">blog details</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">pages</a>
    <ul>
        <li><a href="{{ route('errorPage') }}">Error Page</a></li>
    </ul>
</li>
<li><a href="{{ route('contact') }}">Contact</a></li>