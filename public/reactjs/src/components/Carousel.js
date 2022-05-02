import React, { useState } from "react";
import { Carousel } from 'react-bootstrap';
import { Row, Col } from 'react-bootstrap';

import './../App.css';

export const Comments = () =>{

    return (<div >
              

                <Row>
                    <Col md={10}  className="contentCenter">
                            <p className="saiba contentCenter">Saiba o que dizem os pacientes </p>   

                        <Carousel   Carousel variant="dark">
                            <Carousel.Item className="banner-content">
                                    
                               <p>Gostei muito, super facil e pratico AMEI</p>
       
                            </Carousel.Item>                                          
                        </Carousel>
                    </Col>
                </Row>


            </div>
            )
}

