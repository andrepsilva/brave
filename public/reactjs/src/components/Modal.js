import './../App.css';


import React, { useState, Component } from "react";
import { Button, Modal } from 'react-bootstrap';
import MaterialIcon, {colorPalette} from 'material-icons-react';
import SelectDoctor from "../pages/doctors/Online";

export const BtnFaceQuery =()=> {
    const values = [true, 'sm-down', 'md-down', 'lg-down', 'xl-down', 'xxl-down'];
    const [fullscreen, setFullscreen] = useState(true);
    const [show, setShow] = useState(false);
  
    function handleShow(breakpoint) {
      setFullscreen(breakpoint);
      setShow(true);
    }
  
    return (
      <>
        <Button onClick={() => handleShow(1)} variant="outline-secondary"  className="button-icons" ><MaterialIcon icon="work_outline" size={30}/> <center>Teleconsulta</center><>&nbsp;</></Button>     
        <Modal show={show} fullscreen={fullscreen} onHide={() => setShow(false)}>
          <Modal.Header closeButton>
            <Modal.Title>Atendimento presencial</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <SelectDoctor/>
          </Modal.Body>
        </Modal>
      </>
    );
  }
  


  export const BtnOnlineQuery =()=> {

    const values = [true, 'sm-down', 'md-down', 'lg-down', 'xl-down', 'xxl-down'];
    const [fullscreen, setFullscreen] = useState(true);
    const [show, setShow] = useState(false);
  
    function handleShow(breakpoint) {
      setFullscreen(breakpoint);
      setShow(true);
    }
  
    return (
      <>
        <Button onClick={() => handleShow(1)} variant="outline-secondary" className="button-icons button-margin"><MaterialIcon icon="video_camera_front" size={30}/> <center>Consulta Presencial</center><>&nbsp;</></Button>
        <Modal show={show} fullscreen={fullscreen} onHide={() => setShow(false)}>
          <Modal.Header closeButton>
            <Modal.Title>Teleatendimento</Modal.Title>
          </Modal.Header>
          <Modal.Body>               
            <SelectDoctor/>
          </Modal.Body>
        </Modal>
      </>
    );
  }

