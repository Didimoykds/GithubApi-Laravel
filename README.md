# GithubApi-Laravel
<p>
  Using <strong>Laravel 5.5</strong> to consult Github user WEB API, used Ajax, 
  Jquery and some Laravel and blade methods to keep a clean code.
</p>

Requirements:
<ol>
  <li>Have php>=5.6</li>
  <li>
    Have composer, you can download here: 
    <a href="https://getcomposer.org/doc/00-intro.md">https://getcomposer.org/doc/00-intro.md</a>
  </li>
  <li>
    Have GIT, you can download here:
    <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">
      https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
    </a>
  </li>
</ol>

Commands :
<ol>
  <li>
    On the main folder write on terminal:
    <pre> git clone https://github.com/Didimoykds/GithubApi-Laravel.git</pre>
  </li>
  <li>
    <pre>cd GithubApi-Laravel</pre>
  </li>
  <li>
    <pre>composer update</pre>
  </li>
  <li>
    <pre>cp .env.example .env</pre>
  </li>
  <li>
    <pre>php artisan key:generate</pre>
  </li>
  <li>
    <pre>php artisan serve</pre>
  </li>
</ol>
<p>
  Now probably the application is running on http://localhost:8000, you are free to use, but i configured the application just to retrieve the profile pic, bio, username, name and URL, if you want to retrieve more information feel free to modify. 
</p>
