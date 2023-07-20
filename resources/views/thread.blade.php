<!DOCTYPE html>
<html>
<head>
    <title>Keluh Kesahmu</title>
    <link rel="stylesheet" href="thread.css">

</head>
<body>
    <h1>Keluh Kesahmu</h1>

    <form action="{{ route('threads.store') }}" method="post">
        @csrf
        <textarea name="content" cols="60" rows="15" placeholder="Your thread"></textarea>
        <button type="submit">Post</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Thread</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($threads as $thread)
            <tr>
                <td>{{ $thread->content }}</td>
                <td>
                    <form action="{{ route('threads.destroy', $thread->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
    <a class="cta-btn align-middle" href="/home" target="_blank">HOME</a>
</body>
</html>
