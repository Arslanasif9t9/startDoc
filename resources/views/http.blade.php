<h1>
    <form action="http/path"  method="POST">
        @csrf
        <input type="text" id="name" name="name" placeholder="emter your name">
    </form>
    <button type="button" onclick="submit()" >click</button>
</h1>

<script>
    function submit() {
        let name = document.getElementById('name').value
        // console.log (name)
        // let token = document.

        fetch(`http://127.0.0.1:8000/http/path?name=${name}`,{
            // method: 'GET',
            // header: {
            //     'Content-Type': 'application/json'
            // },
            // body: JSON.stringify(name),
            method: 'Get',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer your-token-here'
            }
            // body: JSON.stringify(name)
        })
        .then(respone => respone.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
        // location.href = '/http/path';
    }
</script>