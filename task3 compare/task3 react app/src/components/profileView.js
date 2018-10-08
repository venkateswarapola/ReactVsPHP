import React, { Component } from 'react';
import QRCode from 'qrcode.react'
import boys2 from '../assets/3.svg';
import boys3 from '../assets/4.svg';
import {Card, CardBody, CardText, CardTitle, Col, Row, Form} from "reactstrap";
import connect from "react-redux/es/connect/connect";
import './profile.css';
import Select from 'react-select';

class ProfileView extends Component {
    constructor(props){
        super();
         this.state = {
            authUser: null,
        };


    }
    render() {
        return (
        	 
        
 <Card className='h-100'>
   <div className="text-center">
    <img src={boys3} width="75" height='auto'/>
       
    <CardBody>
              <CardText
                  className='cardTitle cardPoint'>NAME:Venkatesh</CardText>
               <CardText
                  className='cardTitle cardPoint'>SCORE:100</CardText>
                 <CardText
                  className='cardTitle cardPoint'>COMMENTS:Good</CardText>
                
                    </CardBody>
                      <QRCode value="Venkatesh" />
                    </div>
               </Card>
              )
    }
}
export default ProfileView;

