import React, { Component } from 'react';
import './listView.css';
import ToggleDisplay from 'react-toggle-display';
import QRCode from 'qrcode.react';
import {Card, CardBody, CardText, CardTitle, Col, Row, Form} from "reactstrap";
import boys0 from '../assets/1.svg';
import boys1 from '../assets/2.svg';
import boys2 from '../assets/3.svg';
import boys3 from '../assets/4.svg';
import {Container, Table, Button} from 'reactstrap';
import {FaSearch} from 'react-icons/fa';
class ListView extends Component {
    constructor(props){
        super();
          this.state = 
            { show: false }
        ;
    }
    handleClick() {
    this.setState({
      show: !this.state.show
    });
  }
	render() {
        return (
             <Col sm="12" >
                        
                        <div className="container search">
                            <div className="row">
                                <div className="col-md-12">
                                    <div id="custom-search-input">
                                        <div className="input-group col-md-12">
                                            <input type="text" className="form-control input-lg"
                                                   placeholder="Search by name" value={this.state.search} onChange={this.handleChange}/>
                                            <span className="input-group-btn">
                        <button  className="glyphicon glyphicon-search" type="button">
                            <FaSearch/>
                        </button>
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ToggleDisplay show={this.state.show}>
                        <Card>
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
                        </ToggleDisplay>
                    <Container className="topList">
                        <Row className='otherRow'>
                            <Table borderless='true'>
                                <tbody>
                                <tr>
                        <td className='td'>S.NO</td>
                        <td className='td'></td>
                        <td className='td'>RANK</td>
                        <td className='td cardTitle'>NAME</td>
                        <td className='td'>SCORE</td>
                        <td className='td'></td>
                    </tr>
                                <tr>
                       <td className='td'>1</td>
                        <td className='td'><img src={boys0} width='50px' height='50px'/></td>
                        <td className='td'>1</td>
                        <td className='td cardTitle'>Venkatesh</td>
                        <td className='td'>100</td>
                        <td className='td'>
                            <button className='flip' onClick={ () => this.handleClick() }>View</button>
                        </td>
                    </tr>
                      <tr>
                      <td className='td'>2</td>
                        <td className='td'><img src={boys1} width='50px' height='50px'/></td>
                        <td className='td'>2</td>
                        <td className='td cardTitle'>Vishnu</td>
                        <td className='td'>100</td>
                        <td className='td'><button className='flip' onclick='toggle_visibility()'>
                             View      
                            </button>
                        </td>
                    </tr>
                      <tr>
                        <td className='td'>3</td>
                        <td className='td'><img src={boys2} width='50px' height='50px'/></td>
                        <td className='td'>3</td>
                        <td className='td cardTitle'>Vinay</td>
                        <td className='td'>100</td>
                        <td className='td'><button className='flip' onclick='toggle_visibility()'>
                                  View 
                            </button>
                        </td>
                    </tr>
                      <tr>
                        <td className='td'>4</td>
                        <td className='td'><img src={boys3} width='50px' height='50px'/></td>
                        <td className='td'>4</td>
                        <td className='td cardTitle'>vinod</td>
                        <td className='td'>90</td>
                        <td className='td'><button className='flip' onclick='toggle_visibility()'>
                                   View
                            </button>
                        </td>
                    </tr>
                                </tbody>
                            </Table>
                        </Row>
                    </Container>
                </Col>
		)
	}
}
export default ListView;