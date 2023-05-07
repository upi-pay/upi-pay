package com.wt.electricitybill.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;

import com.wt.electricitybill.entities.ElectricityData;

@Controller
public class ElectricityController
{
    @GetMapping("/")
    public String sendForm() {
        return "index";
    }

    @PostMapping("/bill")
    public String processForm(@ModelAttribute ElectricityData electricityData, Model dataModel) {
        electricityData.generateBill();
        dataModel.addAttribute("totalCost", electricityData.getTotalCost());
        return "bill";
    }
}
