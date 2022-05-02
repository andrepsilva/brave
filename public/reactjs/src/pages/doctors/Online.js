import React, { Component, useState } from "react";
import { Button,Navbar, Container,Row, Col, ListGroup } from 'react-bootstrap';
import MaterialIcon, {colorPalette} from 'material-icons-react';



const SelectDoctor = () =>{

    // <MaterialIcon icon="search" size={30}/> 
    const myOptions = ['One', 'Two', 'Three', 'Four', 'Five'];
    const inputText = useState([])
  
  
        return(<div className="modal-content">       
                        <div className="header-title">
                          <p className="title">Buscar por especialidade</p>
                        </div>
                        <div className="input-icons">
                                <span className="material-icons">
                                        search
                                </span>
                                <input className="input-field" />
                        </div>

                        <div className="modal-search-result">                               
                        <ListGroup variant="flush">
                                <ListGroup.Item>Cras justo odio</ListGroup.Item>
                                <ListGroup.Item>Dapibus ac facilisis in</ListGroup.Item>
                                <ListGroup.Item>Morbi leo risus</ListGroup.Item>
                                <ListGroup.Item>Porta ac consectetur ac</ListGroup.Item>
                        </ListGroup>

                        </div>     
                        
                        
                </div>)
}



export default SelectDoctor;