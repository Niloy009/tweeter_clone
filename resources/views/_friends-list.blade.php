<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(range(1,8) as $index)
        <li>
            <div class="flex items-center text-sm">
                <img class="rounded-full mr-2" src="https://picsum.photos/50/50" alt="images">
                John Doe
            </div>
        </li>
    @endforeach
</ul>
