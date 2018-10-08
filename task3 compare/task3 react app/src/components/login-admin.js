import React, { Component } from 'react';
import FormElement from './FormElement';
import './login-admin.css'

import {login} from '../store'

class LoginView extends Component {
    constructor(props) {
        super();
        this.state = {
            authUser: null,
        };
    }
    render() {
        return (

      <div className="container">
       <h3 className='heading'>Login as Admin</h3>
                <div className="card-body">
                    <FormElement name="name" inputType="email" fullName="Name"/>
                    <FormElement name="password" inputType="password" fullName="Password"  />
                    <button id="button" className="btn btn-outline-success">Login</button>
                </div>
               </div> 
        )
    }
}
export default LoginView;
