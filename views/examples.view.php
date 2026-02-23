
<!-- Include Head Here-->
<?php require 'partials/head.php' ?>


  <!-- Include Banner Here-->
  <?php require 'partials/banner.php' ?>
  <main>
    <div class="card-container">
      <div class="coding-ex">
        <pre style="border-radius: 20px; width: 500px;">
          <code class="language-javascript">
function fetchImage(url) {
  return fetch(url)
    .then(checkStatus)
    .then( res => res.json() ) 
    .catch( error => console.log('An Error Ocurred!', error) )
}
          </code>
        </pre>
        <div style="width: 400px;">
          <p>This code demonstrates how a promise can be use to fetch images from <a target="_blank" href="https://picsum.photos/">Lorem Picsum</a></p>
          <p><strong>Used in:<br></strong><a href="/#proj3">Simple Image Generator</a></p>
          <p><strong>Language:<br></strong> JavaScript (ES6)</p>
          <p><strong>main function:<br></strong> fetches the images using its URL. If the URL exists, then it will proceed to fetch it's JSON data. Throws an error if it does not.</p>
        </div>
      </div>
      <div class="coding-ex">
        <pre style="border-radius: 20px; width: 500px;">
          <code class="language-javascript">
def clean_data(x):
  if isinstance(x, list):
    return [str.lower(i.replace(" ", "")) for i in x]
  else:
    if isinstance(x, str):
      return str.lower(x.replace(" ", ""))
          </code>
        </pre>
        <div style="width: 400px;">
          <p>This code demonstrates the cleaning process of data in a dataset.</p>
          <p><strong>Used in:<br></strong><a href="/#proj2">Anime Recommender System</a></p>
          <p><strong>Language:<br></strong> Python</p>
          <p><strong>main function:<br></strong> Iterates through each cell in a dataset, removing any whitespace present. Top condition demonstrates removing whitespace from a list, and the bottom demonstrates removing from a string. </p>
        </div>
      </div>
      <div class="coding-ex">
        <pre style="border-radius: 20px; width: 500px;">
          <code class="language-javascript">
public function __construct($config)
{
  $dsn = 'mysql:' . http_build_query($config, '', ';');

  $username = $_ENV['DB_USER'];
  $password = $_ENV['DB_PASS'];

  $this->connection = new PDO($dsn, $username, $password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
}
          </code>
        </pre>
        <div style="width: 400px;">
          <p>This code demonstrates how a database is connected to the project.</p>
          <p><strong>Used in:<br></strong><a href="/#proj4">Netmatters Contact Page</a></p>
          <p><strong>Language:<br></strong>PHP</p>
          <p><strong>main function:<br></strong>  </p>
        </div>
      </div>
      <div class="coding-ex">
        <pre style="border-radius: 20px; width: 500px;">
          <code class="language-javascript">
public function index()
{
  $admin = User::first();

  $new_companies = DB::table('companies')->limit(9)->orderBy('id', 'desc')->get();

  $new_employees = DB::table('companies')
      ->join('employees', 'employees.company_id', '=', 'companies.id')
      ->limit(9)->orderBy('id', 'desc')->select('employees.*', 'companies.name', 'companies.logo')->get();

  return view('admin.index',[
      'admin' => $admin,
      'companies' => $new_companies,
      'employees' => $new_employees
  ]);
}
          </code>
        </pre>
        <div style="width: 400px;">
          <p>This code demonstrates querying a database to receive data from it.</p>
          <p><strong>Used in:<br></strong><a href="/#proj4">Company Admin Panel</a></p>
          <p><strong>Language:<br></strong>Laravel</p>
          <p><strong>main function:<br></strong> the new companies and employees variables store the 10 latest companies and employees, which are sent to the index view, where they can be displayed on the screen </p>
        </div>
      </div>
    </div>
    
    <!-- Include Sidebar Here-->
    <?php require 'partials/sidebar.php' ?>
  </main>
    
  <!-- Include Footer Here-->
<?php require 'partials/footer.php' ?>