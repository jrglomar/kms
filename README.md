
## Installation
Clone the repository
<pre class="notranslate"><code>git clone https://github.com/jrglomar/kms
</code></pre>

Switch to the repo folder
<pre class="notranslate"><code>cd kms
</code></pre>

Install all the dependencies using composer 
<pre class="notranslate"><code>composer install
</code></pre>

Copy the .env.example content and rename it to .env file
<pre class="notranslate"><code>cp .env.example .env
</code></pre>

Generate a new application key
<pre class="notranslate"><code>php artisan key:generate
</code></pre>

<!-- 
Generate a new JWT authentication secret key
<pre class="notranslate"><code>php artisan jwt:generate
</code></pre>
Copy the example env file and make the required configuration changes in the .env file
<pre class="notranslate"><code>cp .env.example .env
</code></pre> -->

Before runnning the migration script, make sure you have a database (kms) or database same with the value on .env
Run the database migrations
<pre class="notranslate"><code>php artisan migrate:fresh --seed
</code></pre>

Start the local development server
<pre class="notranslate"><code>php artisan serve
</code></pre>

## Login at APP_URL/login to setup system
<div>
    <table>
        <thead>
            <tr>
                <th><strong>Email</strong></th>
                <th><strong>Password</strong></th>
                <th><strong>Role</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>admin</td>
                <td>User01</td>
                <td>Admin</td>
            </tr>
        </tbody>
    </table>
</div>
