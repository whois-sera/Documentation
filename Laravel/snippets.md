# Define Relations

## Many to One Sample

```
// Client
class Client extends Model
{
	// One Clients has many Projects
    public function projects ()
    {
        return $this->hasMany('App\Project');
    }
}
```

```
// Project
class Project extends Model
{
	// One Project belongs to one Client
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
```

# Seed relation

```
// ClientTableSeeder
public function run()
{
	// Create 50 clients, and 3 project for each. Defining relation in models in necessary
    $clients = factory(App\Client::class, 50)
	    ->create()
	    ->each(function ($client) {
	        $client->projects()->saveMany(factory(App\Project::class, 3)
	        ->make());
    });

}
```



# Json return

```
return response()->json([
    'var1' => $var1`,
    'var2' => $var2`,,
    'var3' => $var3`,
]);
```