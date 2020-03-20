# All

```
Client::all();
```

# Find

```
$id = 1;
Client::find($id);
```

# Where

```
$search = 'azerty'
Client::where('name', "$search%")
Client::where('name', '=', "$search%")
Client::where('name', 'like', "$search%")
```

# All + Order By

```
Client::orderBy('name');
```

# Where + Order By

```
Client::where('name', 'like', "$search%")
    ->orderBy('name');
```

# All + With + Where

- Retrive a model and his related Model while filtering related models

```
$year = '2019';
User::with(['assignableTime' => function($query) use($year) {
    $query->where('year', '=', $year);
}])
    ->orderBy('username')
    ->get();
```

# All + Paginate

```
$clients = Client::all()
    ->paginate(10);
```

# All + Order + Paginate

```
$clients = Client::all()
    ->orderBy('name')
    ->paginate(10);
```

