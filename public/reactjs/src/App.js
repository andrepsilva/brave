import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';

import React, { useState, Component } from "react";
import { Button,Navbar, Container,Row, Col } from 'react-bootstrap';
import MaterialIcon, {colorPalette} from 'material-icons-react';
import {Comments} from './components/Carousel';
import {BtnFaceQuery, BtnOnlineQuery} from './components/Modal';

function App() {
  return (
    <div Class="app">
      <Navbar bg="light">
        <Container >
          <Navbar.Brand href="#home"><p className="logo">BoaSaúde</p></Navbar.Brand>
        </Container>
      </Navbar>
        <div  Class="bg-banner">
          <Container>
              <Row>
                <Col xs={12} md={8}>
                      <p Class="banner-title">O que você gostaria de agendar?</p>
                </Col>
                <Col xs={12} md={4}>
                
                  <div className="d-grid gap-2">
                    <BtnOnlineQuery />
                    <BtnFaceQuery/>           
                  </div>
                
                </Col>
              </Row>        
          </Container>  
        </div>
        <div className="banner-comments">
          <Comments />
        </div>
        <hr />
        <div className="profile-list">
          <Row>
           <Col xs={2} md={2}>
             <img src="https://www.sarkarinaukrisearch.in/wp-content/uploads/2019/08/Whatsapp-DP-Profile-Images-26.jpg" class="rounded-circle profile-img" alt="img" />
           </Col>
           <Col xs={10} md={10}>       
                <div className="profile-right">
                  <p className="profile-name">Dr. Dahir Ramos De Andrade Junior</p>
                  <p className="profile-especialidade">Clínica Médica, Gastroenterologia</p>
                  <p className="profile-endereco">
                    <strong>Endereço:</strong><br /> Rua Maestro Cardim, 560, Conjunto 71 - Liberdade, São Paulo - SP
                  </p>  
                  <p class="profile-description-prince"><strong>Valor</strong></p>
                  <p className="profile-prince"> R$ <a className="profile-prince" href="#">Ver preço</a></p>
                </div>
            </Col>
          </Row>
          
        </div>


    </div>
  );
}





export default App;
