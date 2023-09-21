<div x-data="{ open: false }">
    <button @click="open = !open">Toggle Sidebar</button>
    <aside x-show="open" @click.away="open = false" x-transition.duration.700 class="fixed top-0 left-0 w-64 transition-transform duration-300 transform bg-gray-800 shadow-lg">
        <!-- Isi dari sidebar -->
        <ul>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
        </ul>
    </aside>
</div>
