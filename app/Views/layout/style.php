<style>
    .sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 250px;
  height: 100vh;
  background-color: #333;
  padding-top: 20px;
  color: #fff;
}

.sidebar ul.nav {
  padding-left: 0;
  list-style: none;
}

.sidebar ul.nav li {
  padding: 10px;
}

.sidebar ul.nav li a {
  display: block;
  color: #fff;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.sidebar ul.nav li a:hover {
  background-color: #555;
}

.content {
  margin-left: 250px;
  padding: 20px;
}
.nav-link.active {
    background-color: #ccc;
}

</style>