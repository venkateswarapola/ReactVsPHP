import React, { Component } from 'react';
import store, { addUser } from '../store';
import FormElement from './FormElement';
import './addPeople.css'
import { push } from 'react-router-redux'
import Select from 'react-select';

const options = [
    { value: 'male', label: 'male' },
    { value: 'female', label: 'female'}
        ]

class AddView extends Component {
 constructor(props) {
        super(props);

        this.state = {
            authUser: null,
        };
    

    }
    render() {
        return (
            <div className='container'>
                <h3 className='heading'> Register </h3>
            <div className="card-body">
                <FormElement name="Name" inputType="text" fullName="Name" action={this.onChange} />
                <FormElement name="password" inputType="password" fullName="Password" />
                <FormElement name="comments" inputType="text" fullName="Comments" />
                <FormElement name="phone" inputType="number" fullName="Phone"  />
             <button id="button" className="btn btn-outline-success">Update</button>
            </div>
            </div>
        )
    }
}
export default AddView;