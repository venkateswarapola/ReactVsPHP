import React, { Component } from 'react';
import logo from './assets/logo.png';
import './App.css';
import { Router, Route} from 'react-router-dom';
import ListView from './components/ListView';
import {
    Navbar,
    Nav,
    NavItem,
} from 'reactstrap';
import {Link} from 'react-router-dom'
import Provider from "react-redux/es/components/Provider";
import store, {checkUser, history, watchTaskChangedEvent} from "./store";
import AddView from "./components/addPeople";
import LoginadminView from "./components/login-admin";
import LoginView from "./components/login";
import Notifications from 'react-notify-toast';
import {signOut} from './store'
import ProfileView from "./components/profileView";
class App extends Component {
    constructor(props) {
        super(props);

        this.state = {
            authUser: null,
        };
    }
  render() {
    return (
        <Provider store={store}>
        <Router history={history}>

            <main>
                <Notifications/>
                <Navbar color="light" light expand="md">
                        <Link class='navbar-brand' href="/" to="/" > <img src={logo}  width="125" height="auto" alt=""/></Link>
                    
                    <Nav className="ml-auto" navbar>
                        <NavItem >
                        
                        </NavItem>
                        { !this.state.authUser ?  <NavItem> <Link class="nav-link" to='/login'>Login</Link> </NavItem>  : ''}
                        { !this.state.authUser ?  <NavItem> <Link class="nav-link" to='/login-admin'>Login as admin</Link> </NavItem>  : ''}
                        { !this.state.authUser ?  <NavItem> <Link class="nav-link" to='/Main Menu'>Main Menu</Link> </NavItem>  : ''}
                        { !this.state.authUser ?  <NavItem> <Link class="nav-link" to='/add'>Register</Link></NavItem> : ''}
                        { this.state.authUser ?  <NavItem> <Link class="nav-link" to='/profile'>Profile</Link></NavItem> : ''}
                        { this.state.authUser ?  <NavItem> <Link to='/' class="nav-link" onClick={signOut}> Log out</Link></NavItem> : ''}
                    </Nav>
                </Navbar>
                    <div className="card main">
                        <Route exact path="/" component={ListView} />
                        <Route exact path="/add" component={AddView} />
                         <Route exact path="/Main Menu" component={ListView} />
                        <Route exact path="/login" component={LoginView} />
                        <Route exact path="/login-admin" component={LoginadminView} />
                        <Route exact path="/profile" component={ProfileView} />
                    </div>
            </main>
        </Router>
        </Provider>
    );
  }
}

export default App;
