<h1>Setting up Task Management System</h1>
<h2>Step 1: Clone repository</h2>
<pre><code>git clone https://github.com/vrishabhself/Task-Management.git</code></pre>

<h2>Step 2: Go to project file</h2>
<pre><code>cd Task-Management-main</code></pre>

<h2>Step 3: Create .env file</h2>
<pre><code>cp .env.example .env</code></pre>
<p>Create database in PHPMyAdmin:<br>
Database name: "task_management_system"</p>

<h2>Step 4: Install pacakges</h2>
<pre><code>composer install</code></pre>

<h2>Step 5: Some commands</h2>
<pre>
  <code>php artisan key:generate</code>
  <code>php artisan migrate</code>
  <code>php artisan db:seed --class=TaskSeeder</code>
</pre>

<h2>Step 6: Run application</h2>
<pre><code>php artisan serve</code></pre>