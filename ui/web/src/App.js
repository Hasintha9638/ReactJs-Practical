import './App.css';

function App() {
  return (
  
  <div className="wrapper fadeInDown">
    <div id="formContent">

    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>
    <form>
    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"/>
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password"/>
      <input type="submit" class="fadeIn fourth" value="Log In"/>
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
        
  </div>
  );
}

export default App;
