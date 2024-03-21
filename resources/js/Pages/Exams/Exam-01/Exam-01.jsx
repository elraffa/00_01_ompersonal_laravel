import React, { useEffect, useState } from 'react'
import sectionsData from './sections.json'
import Section from './components/Section'

const Exam01 = ({ exam }) => {
  const [currentPage, setCurrentPage] = useState(1)
  const [questionIndex, setQuestionIndex] = useState(0)
  const sectionsPerPage = 2
  const [sections, setSections] = useState([])
  const [choices, setChoices] = useState(
    JSON.parse(localStorage.getItem('choices')) || [],
  ) // Load choices from local storage

  const handleChoice = (questionId, choice) => {
    // New function to handle choices
    setChoices((prevChoices) => {
      const existingChoice = prevChoices.find(
        (c) => c.questionId === questionId,
      )
      if (existingChoice) {
        return prevChoices.map((c) =>
          c.questionId === questionId ? { questionId, choice } : c,
        )
      } else {
        return [...prevChoices, { questionId, choice }]
      }
    })
  }

  useEffect(() => {
    // Get current sections
    const currentSections = sectionsData.slice(
      (currentPage - 1) * sectionsPerPage,
      currentPage * sectionsPerPage,
    )

    // Define sections
    let newQuestionIndex =
      (currentPage - 1) * sectionsPerPage * currentSections[0].numQuestions

    const newSections = currentSections.map((section) => {
      const questionsForSection = exam.questions.slice(
        newQuestionIndex,
        newQuestionIndex + section.numQuestions,
      )
      newQuestionIndex += section.numQuestions

      return {
        ...section,
        questions: questionsForSection,
      }
    })

    setQuestionIndex(newQuestionIndex)
    setSections(newSections)
  }, [currentPage]) // Run this hook whenever currentPage changes

  useEffect(() => {
    // Save choices to local storage whenever they change
    localStorage.setItem('choices', JSON.stringify(choices))
  }, [choices])

  const paginate = (pageNumber) => {
    setCurrentPage(pageNumber)
  }

  const totalSections = Math.ceil(sectionsData.length / sectionsPerPage)

  return (
    <div className="p-6 bg-white rounded max-w-screen-xl m-auto">
      <h1 className="text-2xl font-bold mb-4">{exam.name}</h1>

      {sections.map((section) => (
        <Section
          key={section.title}
          section={section}
          handleChoice={handleChoice}
          choices={choices}
        />
      ))}

      <div className="pagination flex justify-center">
        {[...Array(totalSections).keys()].map((number) => (
          <button
            className={`rounded p-4 mx-2 ${
              currentPage === number + 1
                ? 'bg-blue-600 text-blue-50'
                : 'bg-blue-400 text-blue-50 hover:bg-blue-600'
            }`}
            key={number}
            onClick={() => paginate(number + 1)}
          >
            {number + 1}
          </button>
        ))}
      </div>
    </div>
  )
}

export default Exam01
